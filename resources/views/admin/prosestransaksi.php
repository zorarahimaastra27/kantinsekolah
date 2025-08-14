<?php
// Set the response header to JSON
header('Content-Type: application/json');

// Database connection details
$servername = "localhost"; // Your server name
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "kantin_sekolah"; // The name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo json_encode(['status' => 'error', 'message' => 'Koneksi database gagal: ' . $conn->connect_error]);
    exit;
}

// Get the JSON data sent from the frontend
$data = json_decode(file_get_contents('php://input'), true);

$nama_pembeli = $data['nama_pembeli'];
$tanggal_pembelian = $data['tanggal_pembelian'];
$pesanan = $data['pesanan'];

// Validate the incoming data
if (empty($nama_pembeli) || empty($tanggal_pembelian) || empty($pesanan)) {
    echo json_encode(['status' => 'error', 'message' => 'Data tidak lengkap.']);
    $conn->close();
    exit;
}

// Start a database transaction to ensure data integrity
$conn->begin_transaction();

try {
    // Calculate the total price of the transaction
    $total_belanja = 0;
    foreach ($pesanan as $item) {
        $total_belanja += $item['total'];
    }

    // Insert into the 'pembelian' table
    $stmt_pembelian = $conn->prepare("INSERT INTO pembelian (nama_pembeli, tanggal_pembelian, total_belanja) VALUES (?, ?, ?)");
    $stmt_pembelian->bind_param("ssd", $nama_pembeli, $tanggal_pembelian, $total_belanja);
    $stmt_pembelian->execute();
    $pembelian_id = $conn->insert_id;
    $stmt_pembelian->close();

    // Insert each menu item into the 'detail_pembelian' table
    $stmt_detail = $conn->prepare("INSERT INTO detail_pembelian (pembelian_id, nama_menu, jumlah, total_harga) VALUES (?, ?, ?, ?)");
    foreach ($pesanan as $nama_menu => $item) {
        $stmt_detail->bind_param("isid", $pembelian_id, $nama_menu, $item['quantity'], $item['total']);
        $stmt_detail->execute();
    }
    $stmt_detail->close();

    // Commit the transaction if all queries are successful
    $conn->commit();
    echo json_encode(['status' => 'success', 'message' => 'Transaksi berhasil disimpan.']);

} catch (mysqli_sql_exception $exception) {
    // Rollback if an error occurs
    $conn->rollback();
    echo json_encode(['status' => 'error', 'message' => 'Transaksi gagal: ' . $exception->getMessage()]);

} finally {
    // Close the database connection
    $conn->close();
}
?>
