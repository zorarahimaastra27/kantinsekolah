@extends('admin.layouts.index') {{-- Sesuaikan dengan layout kamu --}}
@section('content')

<div class="container-fluid mt-3">
    <!-- Tambahkan judul di sini -->
    <h2 class="mb-4 font-weight-bold">Dashboard Kantin Sekolah</h2>

  <div class="row">
    <!-- Box: Jumlah Menu -->
    <div class="col-lg-3 col-6">
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{ $totalMenu }}</h3>
          <p>Jumlah Menu</p>
        </div>
        <div class="icon">
          <i class="fas fa-utensils"></i>
        </div>
      </div>
    </div>

    <!-- Box: Jumlah Pembeli -->
    <div class="col-lg-3 col-6">
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{ $totalPembeli }}</h3>
          <p>Jumlah Pembeli</p>
        </div>
        <div class="icon">
          <i class="fas fa-users"></i>
        </div>
      </div>
    </div>

    <!-- Box: Transaksi Hari Ini -->
    <div class="col-lg-3 col-6">
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{ $transaksiHariIni }}</h3>
          <p>Transaksi Hari Ini</p>
        </div>
        <div class="icon">
          <i class="fas fa-shopping-cart"></i>
        </div>
      </div>
    </div>

    <!-- Box: Pendapatan Hari Ini -->
    <div class="col-lg-3 col-6">
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>Rp{{ number_format($pendapatanHariIni, 0, ',', '.') }}</h3>
          <p>Pendapatan Hari Ini</p>
        </div>
        <div class="icon">
          <i class="fas fa-money-bill-wave"></i>
        </div>
      </div>
    </div>
  </div>

  <!-- Grafik Penjualan -->
  <div class="card mt-4">
    <div class="card-header">
      <h3 class="card-title">Grafik Penjualan Minggu Ini</h3>
    </div>
    <div class="card-body">
      <canvas id="grafikPenjualan"></canvas>
    </div>
  </div>

</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('grafikPenjualan');
  const chart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: {!! json_encode($labelHari) !!},
      datasets: [{
        label: 'Jumlah Penjualan',
        data: {!! json_encode($jumlahPenjualan) !!},
        backgroundColor: 'rgba(54, 162, 235, 0.7)'
      }]
    }
  });
</script>

@endsection
