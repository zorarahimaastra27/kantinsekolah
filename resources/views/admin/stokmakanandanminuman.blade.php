@extends('admin.layouts.index')
@section('content')

<div class="container">
    <h2 class="text-center mb-4">Data Stok Makanan dan Minuman Kantin Sekolah</h2>
    <div class="mb-3">
      <a href="/stokmakanandanminuman/create" class="btn btn-success"><b>+</b> Tambah Stok </a>
    </div>
    <table class="table table-bordered table-striped text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Makanan dan Minuman</th>
                <th>Kategori</th>
                <th>Jumlah</th>
                <th>Satuan</th>
                <th>Aksi</th> <!-- Tambahan -->
            </tr>
        </thead>
        <tbody>
            @foreach ($stokmakanandanminuman as $i => $item)
                <tr>


                    <td>{{$item->id_makanan_dan_minuman}}</td>
                    <td>{{$item->nama_makanan_dan_minuman}}</td>
                    <td>{{$item->kategori}}</td>
                    <td>{{$item->jumlah}}</td>
                    <td>{{$item->satuan}}</td>

                    <td>
                <a href="{{ route('stokmakanandanminuman.edit', $item->id_makanan_dan_minuman) }}" class="btn btn-warning btn-sm" title="Edit">
                <i class="fas fa-edit"></i>
                </a>
                <form action="{{ route('stokmakanandanminuman.destroy', $item->id_makanan_dan_minuman) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" title="Hapus" onclick="return confirm('Yakin ingin menghapus?')">
                    <i class="fas fa-trash-alt"></i>
                </button>
                </form>


                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-center mt-4">
        <a href="dashboard" class="btn btn-success"> ⬅️ Kembali ke Dashboard</a>
    </div>
</div>

@endsection
