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
        return view('create');
    }

    public function store(Request $request)
    {
        Karyawan::create(request$)
    }
}