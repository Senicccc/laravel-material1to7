<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    // Tampilkan semua data karyawan
    public function index()
    {
        $karyawan = Karyawan::all(); // ambil semua data
        return view('home', compact('karyawan')); // lempar ke view
    }

    // Tampilkan form tambah karyawan
    public function create()
    {
        return view('create-karyawan');
    }

    // Proses simpan data baru
    public function store(Request $request)
    {
        // Validasi input
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'umur' => 'required|integer|min:0',
        ]);

        // Simpan ke database
        Karyawan::create($data);

        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil dibuat.');
    }

    // Tampilkan form edit karyawan
    public function edit($id)
    {
        $karyawan = Karyawan::findOrFail($id); // cari berdasarkan id
        return view('edit-karyawan', compact('karyawan'));
    }

    // Proses update data
    public function update(Request $request, $id)
    {
        // Validasi input
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'umur' => 'required|integer|min:0',
        ]);

        $karyawan = Karyawan::findOrFail($id);
        $karyawan->update($data);

        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil diupdate.');
    }

    // Hapus data karyawan
    public function destroy($id)
    {
        Karyawan::findOrFail($id)->delete();
        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil dihapus.');
    }
}