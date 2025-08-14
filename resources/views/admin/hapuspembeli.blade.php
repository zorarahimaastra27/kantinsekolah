@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h3 class="mb-3">Daftar Pembeli</h3>

    <a href="{{ route('pembeli.create') }}" class="btn btn-success mb-3">+ Tambah Pembeli</a>

    <table class="table table-bordered text-center">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pembeli as $i => $item)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->no_hp }}</td>
                <td>
                    <a href="{{ route('pembeli.edit', $item->id_pembeli) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('pembeli.destroy', $item->id_pembeli) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus pembeli ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
