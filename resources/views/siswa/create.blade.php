@extends('template')
@section('title', 'Data Siswa')
@section('konten')

    <h2>Tambah Siswa</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('siswa.store') }}" method="POST" onsubmit="return validasiForm()">
        @csrf

        <p>
            <label>NRP</label><br>
            <input type="text" name="NRP" id="NRP" maxlength="10" value="{{ old('NRP') }}">
        </p>

        <p>
            <label>Nama</label><br>
            <input type="text" name="Nama" id="Nama" maxlength="20" value="{{ old('Nama') }}">
        </p>

        <p>
            <label>Kelas</label><br>
            <input type="text" name="Kelas" id="Kelas" maxlength="5" value="{{ old('Kelas') }}">
        </p>

        <p>
            <label>Tanggal Lahir</label><br>
            <input type="date" name="TanggalLahir" id="TanggalLahir" value="{{ old('TanggalLahir') }}">
        </p>

        <button type="submit">Simpan</button>
        <a href="{{ route('siswa.index') }}">Kembali</a>
    </form>

    <script>
        function validasiForm() {
            let nrp = document.getElementById('NRP').value.trim();
            let nama = document.getElementById('Nama').value.trim();
            let kelas = document.getElementById('Kelas').value.trim();
            let tanggal = document.getElementById('TanggalLahir').value;

            if (nrp === '') {
                alert('NRP wajib diisi');
                return false;
            }
            if (nama === '') {
                alert('Nama wajib diisi');
                return false;
            }
            if (kelas === '') {
                alert('Kelas wajib diisi');
                return false;
            }
            if (tanggal === '') {
                alert('Tanggal lahir wajib diisi');
                return false;
            }
            return true;
        }
    </script>
@endsection





