@extends('template')
@section('judul_halaman', 'Data Agen')
@section('konten')
<a href="/agen" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Agen
        </div>

        <div class="card-body">
            <form action="/agen/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="namaagen" class="col-sm-2 col-form-label">Nama Agen</label>
                    <div class="col-sm-10">
                        <input type="text" name="namaagen" id="namaagen" class="form-control" required maxlength="30">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jumlahagen" class="col-sm-2 col-form-label">Jumlah Agen</label>
                    <div class="col-sm-10">
                        <input type="number" name="jumlahagen" id="jumlahagen" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10 d-flex align-items-center">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="tersedia" id="tersedia">
                            <label class="form-check-label" for="tersedia">Tersedia</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection
