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
    <div class="main-wrapper">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            @include('partials.topnav')
        </nav>
        <div class="main-sidebar">
            @include('partials.sidebar')
        </div>

        <!-- Main Content -->
        <div class="main-content">
            @yield('content')
        </div>
        <footer class="main-footer">
            @include('partials.footer')
        </footer>
    </div>
    <script src="{{ base_url('assets/js/app.js') }}"></script>
    @stack('javascript')
</body>
</html>