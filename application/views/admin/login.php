<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Log In | Smk N 1 Slawi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="<?php echo base_url('template/assets/img/smkn 1 slawi.png'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('template/assets/css/login.css'); ?>">
    <link href="assets/bootstrap/css/config/default/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/bootstrap/css/config/default/app.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/bootstrap/css/config/default/bootstrap-dark.min.css" rel="stylesheet" type="text/css" disabled="disabled" />
    <link href="assets/bootstrap/css/config/default/app-dark.min.css" rel="stylesheet" type="text/css" disabled="disabled" />
    <link href="assets/bootstrap/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="loading authentication-bg authentication-bg-pattern">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('<?php echo base_url('template/assets/img/pp smk3.jpg'); ?>');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
    </style>

    <div class="account-pages my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div id="notif"></div>

                    <div class="card mt-3">
                        <div class="card-body p-4">
                            <div class="text-center mb-3">
                                <a href="index.html">
                                    <img src="<?php echo base_url('template/assets/img/smkn 1 slawi.png'); ?>" alt="Smea Logo" height="90" class="mx-auto">
                                </a>
                            </div>
                            <br>
                            <div class="text-center mb-3">
                                <h4 class="text-uppercase mt-0">ADMINISTRATOR | SIGN IN</h4>

                                <!-- Error message handling -->
                                <?php if ($this->session->flashdata('error')): ?>
                                    <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
                                <?php endif; ?>

                            </div>

                            <!-- Login Form -->
                            <form action="<?php echo site_url('admin/login'); ?>" method="post">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <br>
                                    <input name="username" class="form-control" type="text" id="username"
                                        required="" placeholder="Enter your username">
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <br>
                                    <input name="password" class="form-control" type="password" id="password"
                                        required="" placeholder="Enter your password">
                                </div>

                                <div class="mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                        <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                    </div>
                                </div>
                                <br>
                                <div class="mb-3 d-grid text-center">
                                    <button class="btn btn-primary" type="submit"> Log In </button>
                                </div>
                            </form>
                            <br>

                            <p class="text-center">Don't Have an Account?
                            </p>
                        </div>
                    </div>

                    <div class="row mt-3">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('template/assets/js/bootstrap/js/vendor.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/assets/js/bootstrap.bundle.min.js'); ?>"></script>

</body>

</html>
