<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>

    <div class="container py-4">
        <div class="card">
            <div class="card-header bg-success text-white text-center">
                <h3>Transaksi Berhasil!</h3>
            </div>
            <div class="card-body">
                <p class="lead">Terima kasih atas pembelian Anda. Berikut adalah detail pesanan Anda:</p>
                <hr>
                <h5>ID Transaksi: {{ $transaksi->id }}</h5>
                <ul class="list-group list-group-flush">
                    @foreach($transaksi->details as $item)
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <span>{{ $item->nama_produk }} (x{{ $item->jumlah }})</span>
                                <span>Rp. {{ number_format($item->subtotal) }}</span>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <hr>
                <div class="d-flex justify-content-between">
                    <strong>Total Pembayaran</strong>
                    <strong>Rp. {{ number_format($transaksi->total_bayar) }}</strong>
                </div>
            </div>
            <div class="card-footer text-center">
                <a href="{{ url('/pembeli') }}" class="btn btn-primary">Kembali ke Beranda</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
