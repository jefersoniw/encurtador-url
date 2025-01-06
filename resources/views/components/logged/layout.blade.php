<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <!-- CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Importando os assets via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <x-logged.header />
    <x-logged.sidebar />
    <main class="py-4">
        {{ $slot }}
    </main>
    <x-logged.footer />

    @stack('scripts')

    <!-- JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
