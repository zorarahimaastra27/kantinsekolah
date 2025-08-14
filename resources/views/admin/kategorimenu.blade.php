
@extends('admin.layouts.index')
@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Kategori Menu</h2>

    <a href="{{ route('kategorimenu.create') }}" class="btn btn-success mb-3">+ Tambah Kategori</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered text-center">
        <thead class="table-success">
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategorimenu as $index =>$item)
                <tr>
                    <td>{{ $item->id_kategorimenu }}</td>
                    <td>{{ $item->nama_kategori }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>
                    <a href="{{ route('kategorimenu.edit', $item->id_kategorimenu) }}" class="btn btn-warning btn-sm" title="Edit">
                    <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{ route('kategorimenu.destroy', $item->id_kategorimenu) }}" method="POST" style="display:inline;">
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

    <a href="/dashboard" class="btn btn-secondary"> ⬅️ Kembali ke Dashboard</a>
</div>
@endsection
