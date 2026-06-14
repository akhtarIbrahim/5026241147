@extends('template')
@section('title', 'Edit Data Siswa')
@section('konten')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold text-dark m-0">Edit Data Siswa</h4>
        <a href="{{ route('siswa.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card border rounded-3 bg-white">
        <div class="card-body p-4">
            <form action="{{ route('siswa.update', $siswa->NRP) }}" method="POST" onsubmit="return validasiForm()">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">NRP</label>
                    <div class="col-sm-10">
                        <input type="text" name="NRP" id="NRP" class="form-control" maxlength="10" value="{{ old('NRP', $siswa->NRP) }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="Nama" id="Nama" class="form-control" maxlength="20" value="{{ old('Nama', $siswa->Nama) }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                        <input type="text" name="Kelas" id="Kelas" class="form-control" maxlength="5" value="{{ old('Kelas', $siswa->Kelas) }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" name="TanggalLahir" id="TanggalLahir" class="form-control" value="{{ old('TanggalLahir', $siswa->TanggalLahir) }}" required>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary px-4">Update Data</button>
                    </div>
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

            if (nrp === '' || nama === '' || kelas === '' || tanggal === '') {
                alert('Semua field wajib diisi!');
                return false;
            }
            return true;
        }
    </script>
@endsection
