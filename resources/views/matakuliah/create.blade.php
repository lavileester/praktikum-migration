@extends('layout')
@section('title', 'Tambah Mata Kuliah')
@section('content')
<h3>Tambah Mata Kuliah</h3>

<form action="{{ route('matakuliah.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Kode Mata Kuliah</label>
        <input type="text" name="kode_matakuliah" value="{{ old('kode_matakuliah') }}"
            class="form-control @error('kode_matakuliah') is-invalid @enderror">
        @error('kode_matakuliah') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label>Nama Mata Kuliah</label>
        <input type="text" name="nama_matakuliah" value="{{ old('nama_matakuliah') }}"
            class="form-control @error('nama_matakuliah') is-invalid @enderror">
        @error('nama_matakuliah') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label>Jumlah SKS</label>
        <input type="number" name="sks" value="{{ old('sks') }}"
            class="form-control @error('sks') is-invalid @enderror">
        @error('sks') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection