@extends('nilai.templatenilai')
@section('title', 'Data Nilai')
@section('konten')

    <h2>Data Nilai</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('nilai.create') }}" class="btn btn-primary">Tambah Nilai</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>

        @forelse($nilai as $row)
            <tr>
                <td>{{ $row->NRP }}</td>
                <td>{{ $row->NilaiAngka }}</td>
                <td>{{ $row->SKS }}</td>
                <td>{{ NilaiAngka::toWords($row->NilaiAngka, 'id') }}</td>
                <td>
                @if ($row->NilaiAngka >= 41 && $row->NilaiAngka <= 60)
                    <p>C</p>
                @elseif ($row->NilaiAngka >= 61 && $row->NilaiAngka < 80)
                    <p>B</p>
                @elseif ($row->NilaiAngka >= 81)
                    <p>A</p>
                @elseif ($row->NilaiAngka <= 40)
                    <p>D</p>
                @else
                    <p>Nilai tidak valid</p>
                @endif
                </td>
                <td>
                    {{-- <a href="{{ route('belanja.edit', $row->ID) }}" class="btn btn-warning">Edit</a> --}}
                    <a href="{{ route('nilai.create') }}" class="btn btn-warning">Beli</a>
                    <form action="{{ route('belanja.destroy', $row->ID) }}" method="POST" style="display:inline;"
                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>


        @empty

            <tr>
                <td colspan="5">Belum ada data keranjang belanja.</td>
            </tr>
        @endforelse
    </table>
@endsection




