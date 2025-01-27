<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Assets</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
    @stack('scripts')
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('/') }}">IT Assets</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('assets.index') }}">IT Assets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="footer">
        <p>&copy; {{ date('Y') }} IT Assets</p>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
