<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Home' }}</title>
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