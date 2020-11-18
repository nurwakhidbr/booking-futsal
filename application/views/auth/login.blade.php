@extends('layouts.auth')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h4>Login Page</h4>
    </div>
    <div class="card-body">
        @php
        $this->ci =& get_instance()
        $this->ci->session->flashdata('message')
        @endphp
        <form method="POST" action="<?= base_url('auth'); ?>" class="needs-validation" novalidate="">
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="text" class="form-control" name="email" tabindex="1" required autofocus value="<?= set_value('email'); ?>">
                <div class="invalid-feedback">
                    Please fill in your email
                </div>
                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="form-group">
                <div class="d-block">
                    <label for="password" class="control-label">Password</label>
                    <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                            Forgot Password?
                        </a>
                    </div>
                </div>
                <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                <div class="invalid-feedback">
                    please fill in your password
                </div>
                <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>
@endsection