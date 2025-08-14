@extends('admin.layouts.index')
@section('content')

<div class="container">
    <h2 class="text-center mb-4">Data Pegawai Kantin Sekolah</h2>

    <div class="mb-3">
        <a href="/pegawai/create" class="btn btn-success"><b>+</b> Tambah Pegawai</a>
    </div>

    <table class="table table-bordered table-striped text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Jenis Kelamin</th>
                <th>No. HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pegawai as $index => $item)
            <tr>

                <td>{{$item->id_pegawai}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->jabatan}}</td>
                <td>{{$item->jenis_kelamin}}</td>
                <td>{{$item->no_hp}}</td>
                <td>

                <a href="{{ route('pegawai.edit', $item->id_pegawai) }}" class="btn btn-warning btn-sm" title="Edit">
                <i class="fas fa-edit"></i>
                </a>
                <form action="{{ route('pegawai.destroy', $item->id_pegawai) }}" method="POST" style="display:inline;">
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
        <a href="dashboard" class="btn btn-secondary"> ⬅️ Kembali ke Dashboard</a>
    </div>
</div>
@endsection
