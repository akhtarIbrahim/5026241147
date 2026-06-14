<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index()
    {
        // 1. Gunakan leftJoin agar data tetap muncul walau tidak ada di tabel siswa
        $nilai = DB::table('nilaikuliah')
            ->leftJoin('siswa', 'nilaikuliah.NRP', '=', 'siswa.NRP')
            ->select('nilaikuliah.*', 'siswa.Nama')
            ->get();

        return view('nilai.index', compact('nilai'));
    }

    public function create()
    {
        return view('nilai.create');
    }

    public function store(Request $request)
    {
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

    public function destroy($nrp)
    {
        DB::table('nilaikuliah')->where('NRP', $nrp)->delete();
        return redirect()->route('nilai.index')->with('success', 'Data nilai berhasil dihapus.');
    }
}
