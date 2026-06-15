@extends('templateeas')
@section('title', 'Tambah Data nilai peserta')
@section('konten')

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Kode Soal nilai_peserta</h4>
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

            <form action="{{ route('eas.store') }}" method="POST" onsubmit="return validasiForm()">
                @csrf

                <div class="mb-3">
                    <label class="form-label">No Peserta</label>
                    <input type="text" name="nopeserta" id="Field1" class="form-control"
                           value="{{ old('nopeserta') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nilai Teori</label>
                    <input type="text" name="nilaiteori" id="Field2" class="form-control"
                           value="{{ old('nilaiteori') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nilai Praktek</label>
                    <input type="text" name="nilaipraktek" id="Field3" class="form-control"
                           value="{{ old('nilaipraktek') }}">
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                    <a href="{{ route('eas.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        function validasiForm() {
            let f1 = document.getElementById('Field1').value.trim();
            let f2 = document.getElementById('Field2').value.trim();
            let f3 = document.getElementById('Field3').value.trim();

            if (f1 === '') { alert('Field1 wajib diisi'); return false; }
            if (f2 === '') { alert('Field2 wajib diisi'); return false; }
            if (f3 === '') { alert('Field3 wajib diisi'); return false; }
            return true;
        }
    </script>
@endsection
