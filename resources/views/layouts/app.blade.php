<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kantor PLN AHnaf ')</title>
    <!-- Tambahkan link CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container text-center">
                <a class="navbar-brand mx-auto" href="{{ url('/') }}">Ahnaf Chaisar Akbar</a>
            </div>
     
        </nav>

    </header>
    

    <main class="container mt-4">
        @yield('content')
    </main>

    <footer class="text-center mt-4">
        <p> CopyRight &copy; {{ date('Y') }} Designed By Ahnaf Chaisar Akbar </p>
    </footer>

    <!-- Tambahkan script JS -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>