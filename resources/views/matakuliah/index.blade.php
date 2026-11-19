@extends('layout')
@section('title', 'Daftar Mata Kuliah')
@section('content')
<h3>Daftar Mata Kuliah</h3>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('matakuliah.create') }}" class="btn btn-primary mb-3">+ Tambah</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nomor</th>
            <th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($matakuliah as $mk)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $mk->kode_matakuliah }}</td>
            <td>{{ $mk->nama_matakuliah }}</td>
            <td>{{ $mk->sks }}</td>
            <td>
                <a href="{{ route('matakuliah.show', $mk->id) }}" class="btn btn-info btn-sm">Detail</a>
            </td>
        </tr>
        @empty
        <tr><td colspan="5" class="text-center">Belum ada data</td></tr>
        @endforelse
    </tbody>
</table>
@endsection