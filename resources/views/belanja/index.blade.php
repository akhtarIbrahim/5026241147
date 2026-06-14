@extends('template')
@section('title', 'Data Keranjang Belanja')
@section('konten')

    <h2>Data Keranjang Belanja</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('belanja.create') }}" class="btn btn-primary">Tambah Keranjang Belanja</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total Harga</th>
            <th>Aksi</th>
        </tr>

        @forelse($keranjangbelanja as $row)
            <tr>
                <td>{{ $row->KodeBarang }}</td>
                <td>{{ $row->Jumlah }}</td>
                <td>{{ number_format($row->Harga, 0, ',', '.') }}</td>
                <td>{{ number_format($row->Harga * $row->Jumlah, 0, ',', '.') }}</td>

                <td>
                    {{-- <a href="{{ route('belanja.edit', $row->ID) }}" class="btn btn-warning">Edit</a> --}}
                    <a href="{{ route('belanja.create') }}" class="btn btn-warning">Beli</a>
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




