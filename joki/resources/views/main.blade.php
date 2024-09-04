<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Link ke file CSS Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>@yield('title', 'Home')</title>
</head>
<body>
    <header>
        @include('navbar')
    </header>

    <!-- Link ke file JS Bootstrap dan dependencies -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
