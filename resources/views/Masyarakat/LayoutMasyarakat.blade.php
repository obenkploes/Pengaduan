<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Pengaduan</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-icons.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-primary bg-gradient">
        <div class="container">
            <span class="navbar-brand fw-bold">LPM Apps</span>
            <ul class="nav ms-auto">
                <li class="nav-item">
                    <a href="#" class="btn btn-success">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('isi_halaman')
</body>
</html>