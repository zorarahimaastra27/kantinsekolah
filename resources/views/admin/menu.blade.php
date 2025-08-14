
@extends('admin.layouts.index')
@section('content')
  <div class="container mt-5">

    <h2 class="text-center mb-4">Daftar Menu Makanan dan Minuman Kantin Sekolah</h2>

    <div class="mb-3">
      <a href="/menu/create" class="btn btn-success"><b>+</b> Tambah Menu</a>
    </div>

      <table class="table table-bordered table-striped">
        <thead class="table">
          <tr>
            <th style="width: 40px;">No</th>
            <th style="width: 200px;">Nama Menu</th>
            <th style="width: 150px;">Kategori</th>
            <th style="width: 100px;">Harga</th>
            <th style="width: 100px;">Stok</th>
            <th style="width: 100px;">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($menu as $i => $item)
            <tr>
              <td>{{$item->id_menu}}</td>
              <td>{{$item->nama_menu}}</td>
              <td>{{$item->kategori}}</td>
              <td>Rp  {{$item->harga}}</td>
              <td>{{$item->stok}}</td>
              <td>
                <a href="{{ route('menu.edit', $item->id_menu) }}" class="btn btn-warning btn-sm" title="Edit">
                <i class="fas fa-edit"></i>
                </a>
             <form action="{{ route('menu.destroy', $item->id_menu) }}" method="POST" style="display:inline;">
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
      <a href="dashboard" class="btn btn-secondary">⬅️ Kembali ke Dashboard</a>
    </div>

  </div>
@endsection
