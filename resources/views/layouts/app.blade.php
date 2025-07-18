<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Parts Store</title>
    @vite(['resources/css/app.css'])
    
</head>
<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @vite(['resources/js/app.js'])
</body>
</html>