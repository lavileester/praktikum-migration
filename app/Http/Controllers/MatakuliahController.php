<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    // Soal 3: daftar semua data
    public function index()
    {
        $matakuliah = Matakuliah::all();
        return view('matakuliah.index', compact('matakuliah'));
    }

    // Soal 2: tampilkan form tambah
    public function create()
    {
        return view('matakuliah.create');
    }

    // Soal 2: validasi lalu simpan
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_matakuliah' => 'required|max:20|unique:matakuliah,kode_matakuliah',
            'nama_matakuliah' => 'required|max:100',
            'sks'             => 'required|integer|between:1,6',
        ], [
            'kode_matakuliah.required' => 'Kode mata kuliah wajib diisi.',
            'kode_matakuliah.unique'   => 'Kode mata kuliah sudah digunakan.',
            'nama_matakuliah.required' => 'Nama mata kuliah wajib diisi.',
            'sks.required'             => 'Jumlah SKS wajib diisi.',
            'sks.integer'              => 'SKS harus berupa angka.',
            'sks.between'              => 'SKS harus antara 1 sampai 6.',
        ]);

        Matakuliah::create($validated);

        return redirect()->route('matakuliah.index')
                        ->with('success', 'Data berhasil ditambahkan.');
    }

    // Soal 4: detail satu data
    public function show($id)
    {
        $matakuliah = Matakuliah::findOrFail($id);
        return view('matakuliah.show', compact('matakuliah'));
    }
}