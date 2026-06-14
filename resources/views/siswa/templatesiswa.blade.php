<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard Siswa - Akhtar Ibrahim</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
            color: #334155;
        }
        .navbar-custom {
            background-color: #ffffff;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.05);
        }
        .nav-link-custom {
            color: #64748b !important;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            border-radius: 0.375rem;
            transition: all 0.2s;
        }
        .nav-link-custom:hover {
            color: #4f46e5 !important;
            background-color: #f1f5f9;
        }
        .nav-link-custom.active {
            color: #4f46e5 !important;
            background-color: #eef2ff;
            font-weight: 600;
        }
        .hero-header {
            background: linear-gradient(135deg, #4f46e5 0%, #3730a3 100%);
            border-radius: 1rem;
        }
    </style>
</head>

<body>

    <div class="container mt-4">
        <div class="p-5 text-white hero-header shadow-sm mb-4">
            <span class="badge bg-white text-primary mb-2 fw-semibold">5026241147</span>
            <h1 class="fw-bold m-0">Akhtar Ibrahim</h1>
            <p class="opacity-75 mt-2 mb-0">Sistem Informasi Manajemen Data Kampus & Sekolah</p>
        </div>

        <nav class="navbar navbar-expand-lg navbar-custom rounded-3 p-2 mb-4">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav gap-1">
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom" href="/pegawai"><i class="bi bi-briefcase me-1"></i> Pegawai</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom" href="/agen"><i class="bi bi-person-badge me-1"></i> Agen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom active" href="/siswa"><i class="bi bi-people me-1"></i> Siswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom" href="/belanja"><i class="bi bi-journal-text me-1"></i> Latihan 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom" href="/nilai"><i class="bi bi-journal-text me-1"></i> Latihan 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom" href="/eas"><i class="bi bi-file-earmark-check me-1"></i> EAS</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="mb-5">
            @yield('konten')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
