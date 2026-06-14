<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgenController extends Controller
{
    public function index()
    {
        $agen = DB::table('agen')->get();
        return view('agen.index', ['agen' => $agen]);
    }

    public function tambah()
    {
        return view('agen.tambah');
    }

    public function store(Request $request)
    {
        DB::table('agen')->insert([
            'namaagen'   => $request->namaagen,
            'jumlahagen' => $request->jumlahagen,
            'tersedia'   => $request->has('tersedia') ? 'Y' : 'N',
        ]);
        return redirect('/agen');
    }

    public function edit($id)
    {
        $agen = DB::table('agen')->where('kodeagen', $id)->first();
        return view('agen.edit', ['agen' => $agen]);
    }

    public function update(Request $request)
    {
        DB::table('agen')->where('kodeagen', $request->id)->update([
            'namaagen'   => $request->namaagen,
            'jumlahagen' => $request->jumlahagen,
            'tersedia'   => $request->has('tersedia') ? 'Y' : 'N',
        ]);
        return redirect('/agen');
    }

    public function hapus($id)
    {
        DB::table('agen')->where('kodeagen', $id)->delete();
        return redirect('/agen');
    }
}
