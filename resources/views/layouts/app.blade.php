<!DOCTYPE html>
<html lang="{{ strreplace('', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Your Laravel App')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Je moet het pad naar je CSS-bestand mogelijk aanpassen -->

</head>
<body>
    <div class="container">
        <!-- Header -->
        <header>
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <!-- Voeg meer menu-items toe zoals nodig -->
                </ul>
            </nav>
        </header>

        <!-- Content -->
        <div class="content">
            @yield('content')
        </div>

        <!-- Footer -->
        <footer>
            <p>&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Je moet het pad naar je JavaScript-bestand mogelijk aanpassen -->
</body>
</html>