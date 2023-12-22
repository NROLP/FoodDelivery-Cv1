<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Food-Dala Login</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('css/login_style.css') ?>">
</head>

<body>
    <div id="myModal">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="avatar">
                        <img src="image\icon_1.png" alt="Avatar">
                    </div>
                    <h4 class="modal-title">Welcome to <br>Food-Dala</h4>
                </div>

                <div class="modal-body">
                    <?php if (session()->has('error')) : ?>
                        <div class="alert alert-danger">
                            <?= session('error') ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?= site_url('loginVerify') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
                        </div>
                    </form>

                    <div>
                        <a href="<?= site_url('register') ?>" class="btn btn-primary btn-block login-btn">Create an account</a>
                    </div>
                </div>

                <div class="modal-footer">
                    <a href="#" class="forgot-password-link">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>