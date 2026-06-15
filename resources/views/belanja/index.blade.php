@extends('template')
@section('title', 'Data Keranjang Belanja')
@section('konten')

    <h2>Data Keranjang Belanja</h2>

    @if (session('success'))
        <div class="alert alert-success" style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('belanja.create') }}" class="btn btn-primary">Tambah Keranjang Belanja</a>

    <br><br>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($keranjangbelanja as $row)
                <tr>
                    <td>{{ $row->KodeBarang }}</td>
                    <td>{{ $row->Jumlah }}</td>
                    <td>{{ number_format($row->Harga, 0, ',', '.') }}</td>
                    <td>{{ number_format($row->Harga * $row->Jumlah, 0, ',', '.') }}</td>
                    <td>
                        {{-- Tombol Edit (Opsional, sesuaikan dengan route edit kamu) --}}
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>

                        {{-- Tombol Hapus --}}
                        <form action="{{ route('belanja.destroy', $row->ID) }}" method="POST" style="display:inline;"
                            onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada data keranjang belanja.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
