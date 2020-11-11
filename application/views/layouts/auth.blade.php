@extends('layouts.skeleton')
@section('app')
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="assets/img/logo.png" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>
                    @yield('content')
                    <div class="mt-5 text-muted text-center">
                    Don't have an account? <a href="auth-register.html">Create One</a>
                    </div>
                    <div class="simple-footer">
                    Copyright &copy; AM4K {{ date('Y') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection