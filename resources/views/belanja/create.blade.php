@extends('template')
@section('title', 'Data Keranjang Belanja')
@section('konten')

    <h2>Tambah Keranjang Belanja</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('belanja.store') }}" method="POST">
        @csrf

        <p>
            <label>Kode Barang</label><br>
            <input type="text" name="KodeBarang" id="KodeBarang" maxlength="10" value="{{ old('KodeBarang') }}">
        </p>

        <p>
            <label>Jumlah</label><br>
            <input type="text" name="Jumlah" id="Jumlah" maxlength="20" value="{{ old('Jumlah') }}">
        </p>

        <p>
            <label>Harga</label><br>
            <input type="text" name="Harga" id="Harga" maxlength="20" value="{{ old('Harga') }}">
        </p>

        <button type="submit">Simpan</button>
        <a href="{{ route('belanja.index') }}">Kembali</a>
    </form>

    {{-- <script>
        // // function validasiForm() {
        // //     let nrp = document.getElementById('NRP').value.trim();
        // //     let nama = document.getElementById('Nama').value.trim();
        // //     let kelas = document.getElementById('Kelas').value.trim();
        // //     let tanggal = document.getElementById('TanggalLahir').value;

        //     if (nrp === '') {
        //         alert('NRP wajib diisi');
        //         return false;
        //     }
        //     if (nama === '') {
        //         alert('Nama wajib diisi');
        //         return false;
        //     }
        //     if (kelas === '') {
        //         alert('Kelas wajib diisi');
        //         return false;
        //     }
        //     if (tanggal === '') {
        //         alert('Tanggal lahir wajib diisi');
        //         return false;
        //     }
        //     return true;
        // }
    </script> --}}
@endsection





{{-- SIAP EAS --}}
