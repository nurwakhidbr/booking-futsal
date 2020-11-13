<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Home' }} | SIFutsal</title>
    <link rel="shortcut icon" href="{{ base_url('assets/img/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ base_url('assets/img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ base_url('assets/img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ base_url('assets/img/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ base_url('assets/site.webmanifest') }}">
    <link rel="stylesheet" href="{{ base_url('assets/css/app.css') }}">
</head>
<body>
    <div id="app">
    @yield('app')
    </div>
    <script src="{{ base_url('assets/js/app.js') }}"></script>
    @stack('javascript')
</body>
</html>