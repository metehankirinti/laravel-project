<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Araç Uygulaması')</title>
    <!-- İsteğe bağlı olarak CSS dosyalarını buraya ekleyebilirsiniz -->
</head>
<body>
    <header>
        <!-- İsteğe bağlı başlık veya logo buraya gelebilir -->
        <h1>Araç Uygulaması</h1>
        <nav>
            <ul>
                <li><a href="/">Ana Sayfa</a></li>
                <li><a href="/cars">Araçlar</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- İsteğe bağlı altbilgi veya diğer bilgiler buraya gelebilir -->
    </footer>
</body>
</html>
