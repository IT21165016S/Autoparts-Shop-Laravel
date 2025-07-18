<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Parts Store</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <header>
        <h1>Auto Parts Store</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/admin">Admin</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Auto Parts Store</p>
    </footer>

    @vite(['resources/js/app.js'])
</body>
</html>