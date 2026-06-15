@extends('template')
@section('title', 'Data Siswa')
@section('konten')

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Tambah Siswa</h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('siswa.store') }}" method="POST" onsubmit="return validasiForm()">
                @csrf

                <div class="mb-3">
                    <label class="form-label">NRP</label>
                    <input type="text" name="NRP" id="NRP" class="form-control" maxlength="10" value="{{ old('NRP') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="Nama" id="Nama" class="form-control" maxlength="20" value="{{ old('Nama') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Kelas</label>
                    <input type="text" name="Kelas" id="Kelas" class="form-control" maxlength="5" value="{{ old('Kelas') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" name="TanggalLahir" id="TanggalLahir" class="form-control" value="{{ old('TanggalLahir') }}">
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                    <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        function validasiForm() {
            let nrp = document.getElementById('NRP').value.trim();
            let nama = document.getElementById('Nama').value.trim();
            let kelas = document.getElementById('Kelas').value.trim();
            let tanggal = document.getElementById('TanggalLahir').value;

            if (nrp === '') { alert('NRP wajib diisi'); return false; }
            if (nama === '') { alert('Nama wajib diisi'); return false; }
            if (kelas === '') { alert('Kelas wajib diisi'); return false; }
            if (tanggal === '') { alert('Tanggal lahir wajib diisi'); return false; }
            return true;
        }
    </script>
@endsection
