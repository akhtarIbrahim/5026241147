<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgenController extends Controller
{
    public function indexagen()
    {
        $agen = DB::table('agen')->get();
        return view('indexagen', ['agen' => $agen]);
    }

    public function tambahagen()
    {
        return view('tambahagen');
    }

    public function storeagen(Request $request)
    {
        DB::table('agen')->insert([
            'namaagen'   => $request->namaagen,
            'jumlahagen' => $request->jumlahagen,
            'tersedia'   => $request->has('tersedia') ? 'Y' : 'N',
        ]);
        return redirect('/agen');
    }

    public function editagen($id)
    {
        $agen = DB::table('agen')->where('kodeagen', $id)->first();
        return view('tambahagen', ['agen' => $agen]);
    }

    public function updateagen(Request $request)
    {
        DB::table('agen')->where('kodeagen', $request->id)->update([
            'namaagen'   => $request->namaagen,
            'jumlahagen' => $request->jumlahagen,
            'tersedia'   => $request->has('tersedia') ? 'Y' : 'N',
        ]);
        return redirect('/agen');
    }

    public function hapusagen($id)
    {
        DB::table('agen')->where('kodeagen', $id)->delete();
        return redirect('/agen');
    }
}
