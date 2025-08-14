@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card border-danger">
        <div class="card-header bg-danger text-white">
            Konfirmasi Hapus Pegawai
        </div>
        <div class="card-body">
            <h5 class="card-title">Yakin ingin menghapus pegawai berikut?</h5>
            <ul class="list-group mb-3">
                <li class="list-group-item"><strong>Nama:</strong> {{ $pegawai->nama }}</li>
                <li class="list-group-item"><strong>Jabatan:</strong> {{ $pegawai->jabatan }}</li>
                <li class="list-group-item"><strong>No HP:</strong> {{ $pegawai->no_hp }}</li>
            </ul>

            <form action="{{ route('pegawai.destroy', $pegawai->id_pegawai) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
