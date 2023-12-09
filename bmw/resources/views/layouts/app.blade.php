<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>My Laravel App</h1>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <!-- Alt bilgi veya diğer bileşenler -->
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
