<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?=base_url('assets/css/app.css')?>">
    <link rel="shortcut icon" href="<?=base_url('assets/img/logo')?>" type="image/x-icon">
</head>
<body>
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="<?= base_url('assets/img/logo.png'); ?>" alt="logo" width="150" class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Login Page</h4>
                        </div>
                        <div class="card-body">
                            <?= $this->session->flashdata('message'); ?>
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
                    <div class="mt-5 text-muted text-center">
                        Don't have an account? <a href="<?= base_url('auth/registration'); ?>">Create One</a>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; Si Futsal ~ 2020
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="<?=base_url('assets/js/app.js');?>"></script>
</body>
</html>