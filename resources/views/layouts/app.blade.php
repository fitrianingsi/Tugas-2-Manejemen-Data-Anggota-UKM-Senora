<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #f4f6f9;
            font-size: 14px;
            margin: 0;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            background: #1f2937;
        }

        .logo {
            color: white;
            font-size: 20px;
            font-weight: 600;
            padding: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, .1);
        }

        .sidebar a {
            display: block;
            color: #d1d5db;
            text-decoration: none;
            padding: 14px 20px;
        }

        .sidebar a:hover {
            background: #374151;
            color: white;
        }

        .content {
            margin-left: 250px;
        }

        .navbar-custom {
            background: white;
            padding: 15px 25px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .05);
        }

        .main-content {
            padding: 25px;
        }
    </style>
</head>

<body>

    <div class="sidebar">

        <div class="logo">
            UKM SENORA
        </div>

        <a href="{{ route('anggotas.index') }}">Data Anggota</a>

        <a href="{{ route('bidangs.index') }}">
            Data Bidang
        </a>

        <a href="{{ route('divisis.index') }}">
            Data Divisi
        </a>

        <a href="{{ route('prokers.index') }}">
            Program Kerja
        </a>

        <a href="#">
            Trash Data
        </a>

    </div>

    <div class="content">

        <div class="navbar-custom d-flex justify-content-between">
            <span class="fw-semibold">
                Manajemen Data Anggota UKM SENORA
            </span>

            <span>
                Admin
            </span>
        </div>

        <div class="main-content">
            @yield('content')
        </div>

    </div>

</body>

</html>
