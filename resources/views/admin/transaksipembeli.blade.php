<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan Interaktif - 10 Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .product-card {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 10px;
            margin-bottom: 15px;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            cursor: pointer;
        }
        .product-card:hover {
            transform: translateY(-5px);
        }
        .product-image {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        .card-header {
            background-color: #0d6efd;
            color: white;
            padding: 1rem;
            border-radius: 8px 8px 0 0;
        }
        .card-footer {
            background-color: #f8f9fa;
        }
        .container-main {
            display: flex;
            gap: 2rem;
        }
        .menu-grid {
            flex: 3;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1rem;
        }
        .transaction-panel {
            flex: 1;
            min-width: 300px;
        }
    </style>
</head>
<body>
    <div class="container py-4">
        <h2 class="mb-4 text-center"></h2>



                </div>
            </div>
        </div>

        <div class="container-main">
            <div class="menu-grid">
                <div class="product-card text-center" onclick="addProduct('Mie Goreng + Telur', 10000)">
                    <img src="image/mie_goreng.jpg" alt="Mie Goreng" class="product-image">
                    <h6>Mie Goreng + Telur</h6>
                    <p>Rp. 10.000</p>
                </div>
                <div class="product-card text-center" onclick="addProduct('Nasi Goreng + Telur', 13000)">
                    <img src="image/nasi_goreng.jpg" alt="Nasi goreng + telur" class="product-image">
                    <h6>Nasi Goreng + Telur</h6>
                    <p>Rp. 13.000</p>
                </div>
                <div class="product-card text-center" onclick="addProduct('Nasi Kuning', 10000)">
                    <img src="image/nasi_kuning.jpg" alt="Nasi kuning" class="product-image">
                    <h6>Nasi Kuning</h6>
                    <p>Rp. 10.000</p>
                </div>
                <div class="product-card text-center" onclick="addProduct('Mie Rebus', 10000)">
                    <img src="image/mierebus.jpg" alt="Mie Rebus" class="product-image">
                    <h6>Mie Rebus</h6>
                    <p>Rp. 10.000</p>
                </div>
                <div class="product-card text-center" onclick="addProduct('Mie ayam', 13000)">
                    <img src="image/mieayam.jpg" alt="Mie ayam" class="product-image">
                    <h6>Mie Ayam</h6>
                    <p>Rp. 13.000</p>
                </div>
                <div class="product-card text-center" onclick="addProduct('Lontong Sayur', 6000)">
                    <img src="image/lontong_sayur.jpg" alt="Lontong sayur" class="product-image">
                    <h6>Lontong Sayur</h6>
                    <p>Rp. 6.000</p>
                </div>
                <div class="product-card text-center" onclick="addProduct('Nasi Uduk', 10000)">
                    <img src="image/nasi_uduk.jpg" alt="Nasi uduk" class="product-image">
                    <h6>Nasi Uduk</h6>
                    <p>Rp. 10.000</p>
                </div>
                <div class="product-card text-center" onclick="addProduct('Teh Manis Dingin', 5000)">
                    <img src="image/teh_manis_dingin.jpg" alt="Teh manis dingin" class="product-image">
                    <h6>Teh Manis Dingin</h6>
                    <p>Rp. 5.000</p>
                </div>
                <div class="product-card text-center" onclick="addProduct('Nutrisari Jeruk Peras', 5000)">
                    <img src="image/nutrisari.jpg" alt="nutrisari jeruk peras" class="product-image">
                    <h6>Nutrisari Jeruk Peras</h6>
                    <p>Rp. 5.000</p>
                </div>
                <div class="product-card text-center" onclick="addProduct('Air Mineral Botol', 3000)">
                    <img src="image/lemineral.jpg" alt="Air mineral" class="product-image">
                    <h6>Air Mineral Botol</h6>
                    <p>Rp. 3.000</p>
                </div>
                <div class="product-card text-center" onclick="addProduct('Bakwan', 1000)">
                    <img src="image/bakwan.jpg" alt="Bakwan" class="product-image">
                    <h6>Bakwan</h6>
                    <p>Rp. 1.000</p>
                </div>

                <div class="product-card text-center" onclick="addProduct('Risol', 1500)">
                    <img src="image/risol.jpg" alt="Risol" class="product-image">
                    <h6>Risol</h6>
                    <p>Rp. 1.500</p>
                </div>
                <div class="product-card text-center" onclick="addProduct('Tahu Isi', 1500)">
                    <img src="image/tahu_isi.jpg" alt="Tahu Isi" class="product-image">
                    <h6>Tahu Isi</h6>
                    <p>Rp. 1.500</p>
                </div>
                <div class="product-card text-center" onclick="addProduct('Goreng Pisang', 2000)">
                    <img src="image/goreng_pisang.jpg" alt="Goreng Pisang" class="product-image">
                    <h6>Goreng Pisang</h6>
                    <p>Rp. 2.000</p>
                </div>
                <div class="product-card text-center" onclick="addProduct('Goreng Tempe', 1500)">
                    <img src="image/goreng_tempe.jpg" alt="Goreng Tempe" class="product-image">
                    <h6>Goreng Tempe</h6>
                    <p>Rp. 1.500</p>
                </div>
                <div class="product-card text-center" onclick="addProduct('Jus Mangga', 8000)">
                    <img src="image/jus_mangga.jpg" alt="Jus Mangga" class="product-image">
                    <h6>Jus Mangga</h6>
                    <p>Rp. 8.000</p>
                </div>
                <div class="product-card text-center" onclick="addProduct('Es Campur', 10000)">
                    <img src="image/escampur.jpg" alt="Es Campur" class="product-image">
                    <h6>Es Campur</h6>
                    <p>Rp. 10.000</p>
                </div>
                <div class="product-card text-center" onclick="addProduct('Es Cappuccino Cincau', 7000)">
                    <img src="image/escopucinocincau.jpg" alt="Es Cappuccino Cincau" class="product-image">
                    <h6>Es Cappuccino Cincau</h6>
                    <p>Rp. 7000</p>
                </div>
                <div class="product-card text-center" onclick="addProduct('Kebab Mini', 5000)">
                    <img src="image/kebabmini.jpg" alt="Kebab Mini" class="product-image">
                    <h6>Kebab Mini</h6>
                    <p>Rp. 5.000</p>
                </div>
                <div class="product-card text-center" onclick="addProduct('Kentang Goreng', 8000)">
                    <img src="image/kentanggoreng.jpg" alt="Kentang Goreng" class="product-image">
                    <h6>Kentang Goreng</h6>
                    <p>Rp. 8.000</p>
                </div>
                <div class="product-card text-center" onclick="addProduct('Sosis Bakar', 3000)">
                    <img src="image/sosis_bakar.jpg" alt="Sosis Bakar" class="product-image">
                    <h6>Sosis Bakar</h6>
                    <p>Rp. 3.000</p>
                </div>
                <div class="product-card text-center" onclick="addProduct('Pempek', 6000)">
                    <img src="image/pempekmini.jpg" alt="Pempek" class="product-image">
                    <h6>Pempek</h6>
                    <p>Rp. 6.000</p>
                </div>
                <div class="product-card text-center" onclick="addProduct('Seblak', 8000)">
                    <img src="image/seblak.jpg" alt="Seblak" class="product-image">
                    <h6>Seblak</h6>
                    <p>Rp. 8.000</p>
                </div>
            </div>

            <div class="transaction-panel">
                <div class="card">
                    <div class="card-header">
                        Keranjang Belanja
                    </div>
                    <div class="card-body">
                    <div class="mb-3">
                        <label for="nama_pembeli" class="form-label">Nama Pembeli</label>
                        <input type="text" class="form-control" id="nama_pembeli" placeholder="Masukkan nama pembeli">
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tbody id="transaction-items">
                                </tbody>
                        </table>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <strong>Total</strong>
                        <strong id="total-price">Rp. 0</strong>
                    </div>
                    <form action="{{ route('transaksipembeli.store') }}" method="POST">
                   @csrf
                    <!-- input lainnya -->
                    <button type="submit" class="btn btn-primary w-100">Proses</button>
                </form>
                </div>
            </div>
              <div class="text-center mt-4">
            <a href="dashboard" class="btn btn-secondary">⬅️ Kembali ke Dashboard</a>
        </div>
    </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let cart = {};

        function addProduct(productName, price) {
            if (cart[productName]) {
                cart[productName].quantity++;
                cart[productName].total = cart[productName].quantity * price;
            } else {
                cart[productName] = {
                    quantity: 1,
                    price: price,
                    total: price
                };
            }
            updateTransactionTable();
            calculateTotal();
        }

        function removeProduct(productName) {
            if (cart[productName]) {
                delete cart[productName];
                updateTransactionTable();
                calculateTotal();
            }
        }

        function updateTransactionTable() {
            const tableBody = document.getElementById('transaction-items');
            tableBody.innerHTML = '';

            for (const item in cart) {
                const row = `
                    <tr>
                        <td>${item}</td>
                        <td class="text-end">${cart[item].quantity}</td>
                        <td class="text-end">
                            Rp. ${cart[item].total.toLocaleString('id-ID')}
                            <button class="btn btn-danger btn-sm ms-2" onclick="removeProduct('${item}')">&times;</button>
                        </td>
                    </tr>
                `;
                tableBody.innerHTML += row;
            }
        }

        function calculateTotal() {
            let total = 0;
            for (const item in cart) {
                total += cart[item].total;
            }
            document.getElementById('total-price').innerText = `Rp. ${total.toLocaleString('id-ID')}`;
        }

        // Fungsionalitas tombol proses
        const processButton = document.getElementById('process-button');
        processButton.addEventListener('click', () => {
            const namaPembeli = document.getElementById('nama_pembeli').value;
            const tanggalPembelian = document.getElementById('tanggal_pembelian').value;

            if (namaPembeli === "" || tanggalPembelian === "" || Object.keys(cart).length === 0) {
                alert('Silakan lengkapi nama pembeli, tanggal pembelian, dan pilih menu terlebih dahulu!');
                return;
            }

            // Contoh struktur data yang akan dikirim ke server
            const data = {
                nama_pembeli: namaPembeli,
                tanggal_pembelian: tanggalPembelian,
                pesanan: cart
            };
            console.log(data); // Untuk debugging, cek di console browser

            // Placeholder untuk fungsionalitas kirim ke server
            alert(`Pesanan dari ${namaPembeli} pada tanggal ${tanggalPembelian} telah diproses.`);

            // Reset form dan keranjang setelah sukses
            document.getElementById('nama_pembeli').value = "";
            document.getElementById('tanggal_pembelian').value = "";
            cart = {};
            updateTransactionTable();
            calculateTotal();
        });
    </script>
</body>
</html>
