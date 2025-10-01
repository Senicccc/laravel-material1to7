<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('home', compact('karyawan'));
    }

    public function create()
    {
        return view('create-karyawan');
    }

    public function store(Request $request)
    {
        Karyawan::create($request->all());
        return redirect()->route('karyawan.index')->with('success', 'Karyawan created successfully.');
    }

    public function edit($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        
    }
}