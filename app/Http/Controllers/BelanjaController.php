<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class BelanjaController extends Controller
{
    public function index()
    {
        $keranjangbelanja = DB::table('keranjangbelanja')->get();
        return view('belanja.index', compact('keranjangbelanja'));
    }

    public function create()
    {
        return view('belanja.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'NRP' => 'required|string|max:10|unique:siswa,NRP',
        //     'Nama' => 'required|string|max:20',
        //     'Kelas' => 'required|string|max:5',
        //     'TanggalLahir' => 'required|date',
        // ]);

        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,
        ]);

        return redirect()->route('belanja.index')->with('success', 'Data keranjang belanja berhasil ditambahkan.');
    }

    // public function editbelanja($nrp)
    // {
    //     $siswa = DB::table('siswa')->where('NRP', $nrp)->first();

    //     if (!$siswa) {
    //         abort(404);
    //     }

    //     return view('belanja.editbelanja', compact('siswa'));
    // }

    // public function update(Request $request, $nrp)
    // {
    //     $request->validate([
    //         'NRP' => [
    //             'required',
    //             'string',
    //             'max:10',
    //             Rule::unique('siswa', 'NRP')->ignore($nrp, 'NRP'),
    //         ],
    //         'Nama' => 'required|string|max:20',
    //         'Kelas' => 'required|string|max:5',
    //         'TanggalLahir' => 'required|date',
    //     ]);

    //     DB::table('siswa')
    //         ->where('NRP', $nrp)
    //         ->update([
    //             'NRP' => $request->NRP,
    //             'Nama' => $request->Nama,
    //             'Kelas' => $request->Kelas,
    //             'TanggalLahir' => $request->TanggalLahir,
    //         ]);

    //     return redirect()->route('belanja.index')->with('success', 'Data siswa berhasil diubah.');
    // }

    public function destroy($ID)
    {
        DB::table('keranjangbelanja')->where('ID', $ID)->delete();

        return redirect()->route('belanja.index')->with('success', 'Data keranjang belanja berhasil dihapus.');
    }
}


