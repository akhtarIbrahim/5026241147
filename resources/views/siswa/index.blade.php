@extends('template')
@section('title', 'Data Siswa')
@section('konten')

    <!-- Header Sederhana -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h4 class="fw-bold text-dark m-0">Data Siswa</h4>
            <p class="text-muted small m-0">Daftar seluruh siswa yang terdaftar di sistem.</p>
        </div>
        <div>
            <a href="{{ route('siswa.create') }}" class="btn btn-primary btn-sm px-3 py-2 fw-medium">
                <i class="bi bi-plus-lg"></i> Tambah Data
            </a>
        </div>
    </div>

    <!-- Alert Biasa -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show small py-2" role="alert">
            <i class="bi bi-check-circle me-1"></i> {{ session('success') }}
            <button type="button" class="btn-close py-2" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Tabel Bersih Standar -->
    <div class="card border rounded-3 bg-white">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light small text-secondary">
                    <tr>
                        <th class="ps-3">NRP</th>
                        <th>Nama Lengkap</th>
                        <th>Kelas</th>
                        <th>Tanggal Lahir</th>
                        <th class="pe-3 text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($siswa as $row)
                        <tr>
                            <!-- NRP Biasa -->
                            <td class="ps-3 fw-mono text-secondary small">
                                {{ $row->NRP }}
                            </td>

                            <!-- Nama Tanpa Avatar Bulat -->
                            <td class="fw-medium text-dark">
                                {{ $row->Nama }}
                            </td>

                            <!-- Kelas Badge Simpel -->
                            <td>
                                <span class="badge bg-secondary-subtle text-secondary border px-2 py-1">
                                    {{ $row->Kelas }}
                                </span>
                            </td>

                            <!-- Tanggal Lahir -->
                            <td class="text-muted small">
                                {{ \Carbon\Carbon::parse($row->TanggalLahir)->translatedFormat('d F Y') }}
                            </td>

                            <!-- Tombol Aksi Standard -->
                            <td class="pe-3 text-end">
                                <a href="{{ route('siswa.edit', $row->NRP) }}" class="btn btn-sm btn-outline-warning py-1 px-2" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('siswa.destroy', $row->NRP) }}" method="POST" style="display:inline;"
                                    onsubmit="return confirm('Hapus data {{ $row->Nama }}?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger py-1 px-2" title="Hapus">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-4 text-muted small">
                                <i class="bi bi-inbox fs-3 d-block mb-2 text-secondary"></i>
                                Belum ada data siswa.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
