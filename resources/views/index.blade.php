<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LSP 2026</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">LSP 2026</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href=".">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('berita.index') }}">Berita</a>
                </li>
                @if(session('penulis_role') == '1')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('penulis.index') }}">Penulis</a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Keluar</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4 flex-grow-1">
        @yield('konten')
    </div>

    <footer class="bg-light text-center py-3 mt-4">
        <div class="container">
            <p>&copy; 2026 LSP. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>