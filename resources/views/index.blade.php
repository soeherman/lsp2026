<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LSP 2026</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">LSP 2026</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Penulis</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4" style="min-height: 100vh !important;">
        @yield('konten')
    </div>

    <footer class="bg-light text-center py-3 mt-4">
        <div class="container">
            <p>&copy; 2026 LSP. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>