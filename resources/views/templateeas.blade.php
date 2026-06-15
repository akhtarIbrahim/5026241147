<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kode Soal nilai_peserta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>Kode Soal nilai_peserta</h1>
        <p>@yield('judul_halaman')</p>
    </div>

    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('pegawai*') ? 'active' : '' }}" href="/pegawai">Pegawai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('agen*') ? 'active' : '' }}" href="/agen">Agen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('siswa*') ? 'active' : '' }}" href="/siswa">Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('belanja*') ? 'active' : '' }}" href="/belanja">Latihan 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('nilai*') ? 'active' : '' }}" href="/nilai">Latihan 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('eas*') ? 'active' : '' }}" href="/eas">EAS</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('konten')
    </div>

</body>
</html>
