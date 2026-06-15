@extends('templateeas')
@section('title', 'Data Nilai Peserta')
@section('konten')

    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h4 class="fw-bold text-dark m-0">Kode Soal nilai_peserta</h4>
            <p class="text-muted small m-0">Daftar seluruh record.</p>
        </div>
        <div>
            <a href="{{ route('eas.create') }}" class="btn btn-primary btn-sm px-3 py-2 fw-medium">
                <i class="bi bi-plus-lg"></i> Tambah Data
            </a>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show small py-2" role="alert">
            <i class="bi bi-check-circle me-1"></i> {{ session('success') }}
            <button type="button" class="btn-close py-2" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card border rounded-3 bg-white">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light small text-secondary">
                    <tr>
                        <th class="ps-3">ID</th>
                        <th>No Peserta</th>
                        <th>Nilai Teori</th>
                        <th>Nilai Praktek</th>
                        <th>Rata-rata</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $row)
                        <tr>
                            <td class="ps-3 text-secondary small">{{ $row->ID }}</td>
                            <td class="fw-medium">{{ $row->nopeserta }}</td>
                            <td>{{ $row->nilaiteori }}</td>
                            <td>{{ $row->nilaipraktek }}</td>
                            <td class="pe-3 text-end">
                                {{ number_format(($row->nilaiteori + $row->nilaipraktek) / 2, 2) }}
                            </td>
                           <td class="pe-3 text-end">
                                @php
                                    $average = ($row->nilaiteori + $row->nilaipraktek) / 2;
                                    if ($average >= 75) {
                                        $status = 'Lulus';
                                        $badgeClass = 'success';
                                    } elseif ($average >= 70) {
                                        $status = 'Gagal';
                                        $badgeClass = 'danger';
                                    }
                                @endphp
                                <span class="badge bg-{{ $badgeClass }}">{{ $status }}</span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-4 text-muted small">
                                <i class="bi bi-inbox fs-3 d-block mb-2 text-secondary"></i>
                                Belum ada data.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

