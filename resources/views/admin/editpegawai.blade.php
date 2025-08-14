@extends('admin.layouts.index')
@section('content')>
<div class="container mt-5">
  <h2>Edit Data Pegawai</h2>
  <form action="{{ route('pegawai.update', $pegawai->id_pegawai) }}" method="POST">
    @csrf
    @method('PUT')

    <!-- ID Pegawai disimpan sebagai input tersembunyi -->
    <input type="hidden" name="id_pegawai" value="{{ $pegawai->id_pegawai }}">

    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" value="{{ $pegawai->nama }}" required>
    </div>

    <div class="mb-3">
      <label for="jabatan" class="form-label">jabatan</label>
      <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $pegawai->jabatan }}" required>
    </div>

    <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" required>
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="L" {{ $pegawai->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ $pegawai->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
    </div>
    
    <div class="mb-3">
            <label>No. HP</label>
            <input type="number" class="form-control" id="no_hp" name="no_hp" value="{{ $pegawai->no_hp }}" required>
    </div>


    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    <a href="/pegawai" class="btn btn-secondary">Kembali</a>
  </form>
</div>
@endsection
