@extends('templateagen')
@section('judul_halaman', 'Data Agen')
@section('konten')

    <p><a href="/agen/tambah" class="btn btn-primary"> + Tambah Agen Baru</a></p>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode</th>
            <th>Nama Agen</th>
            <th>Jumlah</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($agen as $a)
            <tr>
                <td>{{ $a->kodeagen }}</td>
                <td>{{ $a->namaagen }}</td>
                <td>{{ $a->jumlahagen }}</td>
                <td>
                    <span class="badge {{ $a->tersedia === 'Y' ? 'bg-success' : 'bg-secondary' }}">
                        {{ $a->tersedia === 'Y' ? 'Ya' : 'Tidak' }}
                    </span>
                </td>
                <td>
                    <a href="/agen/edit/{{ $a->kodeagen }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/agen/hapus/{{ $a->kodeagen }}" class="btn btn-danger"
                       onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
