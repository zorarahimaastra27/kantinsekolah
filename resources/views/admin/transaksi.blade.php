@extends('admin.layouts.index')
@section('content')

<div class="container">
    <h2 class="text-center mb-4">Data Transaksi Kantin Sekolah</h2>



    <table class="table table-bordered table-striped text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>Menu</th>
                <th>Jumlah</th>
                <th>Total Harga</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($transaksi as $index => $item)
                <tr>

                    <td>{{ $item->id_transaksi }}</td>
                    <td>{{ $item->menu }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->total_harga }}</td>

                    <td>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-center mt-4">
        <a href="{{ url('dashboard') }}" class="btn btn-secondary">⬅️ Kembali ke Dashboard</a>
    </div>
</div>

@endsection
