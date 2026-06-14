<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    // Menampilkan daftar nilai dengan JOIN ke tabel siswa
    public function index()
    {
        $nilai = DB::table('nilaikuliah')
            ->join('siswa', 'nilaikuliah.NRP', '=', 'siswa.NRP')
            ->select('nilaikuliah.*', 'siswa.Nama')
            ->get();

        return view('nilai.index', compact('nilai'));
    }

    // Menampilkan form tambah nilai
    public function create()
    {
        return view('nilai.create');
    }

    // Menyimpan data nilai ke database
    public function store(Request $request)
    {
        // Validasi sederhana
        $request->validate([
            'NRP' => 'required',
            'NilaiAngka' => 'required|numeric',
            'SKS' => 'required|numeric',
        ]);

        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS,
        ]);

        return redirect()->route('nilai.index')->with('success', 'Data nilai berhasil ditambahkan.');
    }

    // Menampilkan form edit nilai
    public function edit($nrp)
    {
        $nilai = DB::table('nilaikuliah')->where('NRP', $nrp)->first();

        if (!$nilai) {
            abort(404);
        }

        return view('nilai.edit', compact('nilai'));
    }

    // Menghapus data nilai
    public function destroy($nrp)
    {
        DB::table('nilaikuliah')->where('NRP', $nrp)->delete();

        return redirect()->route('nilai.index')->with('success', 'Data nilai berhasil dihapus.');
    }
}
