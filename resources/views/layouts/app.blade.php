<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ url('assets/bootstrap.css') }}">
    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header>
            @include('partials.nav')
        </header>

        <main class="mt-5">
            @yield('content')
        </main>
    </div>

    <footer>
        @include('partials.footer')
    </footer>

    <!-- Bootstrap JS and Popper.js CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>