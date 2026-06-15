@extends('template')
@section('title', 'Data Nilai')
@section('konten')

    <h2>Data Nilai Mahasiswa</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('nilai.create') }}" class="btn btn-primary mb-3">Tambah Nilai</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($nilai as $row)
                <tr>
                    <td>{{ $row->NRP }}</td>
                    <td>{{ $row->NilaiAngka }}</td>
                    <td>{{ $row->SKS }}</td>
                    <td>
                        @if ($row->NilaiAngka >= 81) A
                        @elseif ($row->NilaiAngka >= 61) B
                        @elseif ($row->NilaiAngka >= 41) C
                        @else D
                        @endif
                    </td>
                    <td>{{ $row->NilaiAngka * $row->SKS }}</td>
                    <td>
                        <form action="{{ route('nilai.destroy', $row->NRP) }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Belum ada data nilai.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
