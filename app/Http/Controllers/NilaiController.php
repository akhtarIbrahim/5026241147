<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class NilaiController extends Controller
{
    public function indexnilai()
    {
        $nilai = DB::table('nilaikuliah')->orderBy('NRP')->get();
        return view('nilai.indexnilai', compact('nilai'));
    }

    public function create()
    {
        return view('nilai.createnilai');
    }

    public function store(Request $request)
    {

        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS,
            ]);

        return redirect()->route('nilai.index')->with('success', 'Data nilai berhasil ditambahkan.');
    }

    public function editnilai($nrp)
    {
        $nilai = DB::table('nilaikuliah')->where('NRP', $nrp)->first();

        if (!$nilai) {
            abort(404);
        }

        return view('nilai.editnilai', compact('nilai'));
    }

    public function destroy($nrp)
    {
        DB::table('nilaikuliah')->where('NRP', $nrp)->delete();

        return redirect()->route('nilai.index')->with('success', 'Data nilai berhasil dihapus.');
    }
}

