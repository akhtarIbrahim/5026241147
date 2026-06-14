@extends('template')
@section('title', 'Data Nilai')
@section('konten')

    <h2>Tambah Nilai</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

        <form action="{{ route('nilai.store') }}" method="POST">
        @csrf

        <p>
            <label>NRP</label><br>
            <input type="text" name="NRP" id="NRP" maxlength="10" value="{{ old('NRP') }}">
        </p>

        <p>
            <label>Nilai Angka</label><br>
            <input type="text" name="NilaiAngka" id="NilaiAngka" maxlength="20" value="{{ old('NilaiAngka') }}">
        </p>

        <p>
            <label>SKS</label><br>
            <input type="text" name="SKS" id="SKS" maxlength="20" value="{{ old('SKS') }}">
        </p>

        <button type="submit">Simpan</button>
        <a href="{{ route('nilai.index') }}">Kembali</a>
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





