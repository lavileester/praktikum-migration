@extends('layout')
@section('title', 'Detail Mata Kuliah')
@section('content')
<h3>Detail Mata Kuliah</h3>

<table class="table table-bordered w-50">
    <tr><th>Kode Mata Kuliah</th><td>{{ $matakuliah->kode_matakuliah }}</td></tr>
    <tr><th>Nama Mata Kuliah</th><td>{{ $matakuliah->nama_matakuliah }}</td></tr>
    <tr><th>Jumlah SKS</th><td>{{ $matakuliah->sks }}</td></tr>
    <tr><th>Tanggal Dibuat</th><td>{{ $matakuliah->created_at }}</td></tr>
    <tr><th>Tanggal Diperbarui</th><td>{{ $matakuliah->updated_at }}</td></tr>
</table>

<a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
@endsection