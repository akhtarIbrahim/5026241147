<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EasController extends Controller
{
    public function index()
    {
        $data = DB::table('nilai_peserta')->orderBy('ID')->get();
        return view('eas.index', compact('data'));
    }

    public function create()
    {
        return view('eas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nopeserta'    => 'required|string|max:5',
            'nilaiteori'   => 'required|integer',
            'nilaipraktek' => 'required|integer',
        ]);

        DB::table('nilai_peserta')->insert([
            'nopeserta'    => $request->nopeserta,
            'nilaiteori'   => $request->nilaiteori,
            'nilaipraktek' => $request->nilaipraktek,
        ]);

        return redirect()->route('eas.index');
    }
}
