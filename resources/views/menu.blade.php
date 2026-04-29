<!DOCTYPE html>
<html lang="id">
<head>
    <title>Menu Akhtar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #ffffff; /* Putih polos supaya bersih */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }
        .header-title {
            margin-top: 50px;
            margin-bottom: 30px;
            border-bottom: 2px solid #003d99;
            display: inline-block;
            padding-bottom: 10px;
        }
        .menu-item {
            border: 1px solid #eee;
            border-radius: 4px;
            padding: 15px;
            transition: background 0.2s;
            text-decoration: none !important;
            display: block;
            height: 100%;
            color: #333;
        }
        .menu-item:hover {
            background-color: #f8f9fa;
            border-color: #003d99;
        }
        .category-tag {
            font-size: 10px;
            font-weight: bold;
            color: #003d99;
            text-transform: uppercase;
            margin-bottom: 5px;
            display: block;
        }
        .item-title {
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .btn-link {
            font-size: 13px;
            color: #003d99;
            text-decoration: underline !important;
            padding: 0;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="text-center">
        <h4 class="header-title">5026241147 – Akhtar Ibrahim</h4>
        <p class="text-muted" style="margin-top: -20px;">Pemrograman Web • Sistem Informasi ITS</p>
    </div>

    <div class="row mt-4">
        <div class="col-6 col-md-4 col-lg-3 mb-4">
            <a href="{{ url('day1k') }}" class="menu-item">
                <span class="category-tag">Materi</span>
                <div class="item-title">Day 1 – Intro</div>
                <span class="btn-link">Buka Halaman</span>
            </a>
        </div>

        <div class="col-6 col-md-4 col-lg-3 mb-4">
            <a href="{{ url('day2k') }}" class="menu-item">
                <span class="category-tag">Materi</span>
                <div class="item-title">Day 2 – News</div>
                <span class="btn-link">Buka Halaman</span>
            </a>
        </div>

        <div class="col-6 col-md-4 col-lg-3 mb-4">
            <a href="{{ url('day3k') }}" class="menu-item">
                <span class="category-tag">Materi</span>
                <div class="item-title">Day 3 – Responsive</div>
                <span class="btn-link">Buka Halaman</span>
            </a>
        </div>

        <div class="col-6 col-md-4 col-lg-3 mb-4">
            <a href="{{ url('day3t') }}" class="menu-item">
                <span class="category-tag">Tugas</span>
                <div class="item-title">Day 3 – Icons</div>
                <span class="btn-link">Buka Halaman</span>
            </a>
        </div>

        <div class="col-6 col-md-4 col-lg-3 mb-4">
            <a href="{{ url('day4t') }}" class="menu-item">
                <span class="category-tag">Tugas</span>
                <div class="item-title">Day 4 – Layout</div>
                <span class="btn-link">Buka Halaman</span>
            </a>
        </div>

        <div class="col-6 col-md-4 col-lg-3 mb-4">
            <a href="{{ url('day5k') }}" class="menu-item">
                <span class="category-tag">Materi</span>
                <div class="item-title">Day 5 – Dell Case</div>
                <span class="btn-link">Buka Halaman</span>
            </a>
        </div>

        <div class="col-6 col-md-4 col-lg-3 mb-4">
            <a href="{{ url('day5t') }}" class="menu-item">
                <span class="category-tag">Tugas</span>
                <div class="item-title">Day 5 – Linktree</div>
                <span class="btn-link">Buka Halaman</span>
            </a>
        </div>
    </div>
</div>

</body>
</html>
