<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index()
    {
        // 1. Ambil data dari database
        $buku = DB::table('buku')->orderBy('id')->get();

        // 2. Hitung rumus Kategori & Ketersediaan pakai short-kondisi ( ? : ) agar cepat dihapal
        foreach ($buku as $b) {
            // Kategori Baru jika selisih tahun ke 2026 maksimal 5 tahun
            $b->kategori = (2026 - $b->tahun <= 5) ? 'Baru' : 'Lama';

            // Ketersediaan berdasarkan kolom sedang_dipinjam
            $b->ketersediaan = ($b->sedang_dipinjam) ? 'Tidak Tersedia' : 'Tersedia';
        }

        // 3. Lempar hasil ke halaman tampilan
        return view('buku.index', compact('buku'));
    }

    public function pinjam($id)
    {
        // Ubah data di database menjadi true berdasarkan ID buku yang diklik
        DB::table('buku')->where('id', $id)->update(['sedang_dipinjam' => true]);

        // Kembalikan ke halaman utama dengan status sukses
        return redirect()->route('buku.index')->with('success', 'Buku berhasil dipinjam!');
    }
}


