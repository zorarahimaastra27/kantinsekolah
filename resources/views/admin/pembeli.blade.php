@extends('admin.layouts.index')
@section('content')
<div class="container">
    <h2 class="text-center mb-4">Data Pembeli Kantin Sekolah</h2>
    <div class="mb-3">
      <a href="/pembeli/create" class="btn btn-success"><b>+</b> Tambah Pembeli</a>
    </div>

    <table class="table table-bordered table-striped text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pembeli</th>
                <th>Tanggal Transaksi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($pembeli as $index=> $item)
                <tr>
                    <td>{{$item->id_pembeli}}</td>
                    <td>{{$item->nama_pembeli}}</td>
                    <td>{{$item->tanggal_pembelian}}</td>
                  <td>

                    <a href="{{ route('pembeli.edit', $item->id_pembeli) }}" class="btn btn-warning btn-sm" title="Edit">
                <i class="fas fa-edit"></i>
                </a>
                <form action="{{ route('pembeli.destroy', $item->id_pembeli) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" title="Hapus" onclick="return confirm('Yakin ingin menghapus?')">
                    <i class="fas fa-trash-alt"></i>
                </button>
                </form>
                </td>

         @endforeach
        </tbody>
    </table>

    <div class="text-center mt-4">
        <a href="dashboard" class="btn btn-secondary">⬅️ Kembali ke Dashboard</a>
    </div>
</div>

@endsection
