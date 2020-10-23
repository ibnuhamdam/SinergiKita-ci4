<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Raleway Font and Roboto Font -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,500;0,700;1,700;1,800&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title><?= $title; ?></title>
</head>
<style>
    body {
        margin: 0;
        font-family: 'Raleway', sans-serif;
    }

    .main {
        background-image: url('<?= base_url(); ?>/assets/image/header.png');
        background-size: cover;
        background-repeat: no-repeat;
        height: 400px;
    }

    .home {
        font-size: 34px;
        line-height: 36px;
        color: #ffffff;
        font-style: normal;
        font-weight: 300;
        padding-left: 39px;
        padding-top: 175px;
    }

    .bolded {
        font-weight: 700;
    }

    .login-form {
        padding-left: 10px;
        padding-top: 180px;
    }

    .login-form .form-group {
        padding: 20px 15px;
    }

    .login-form .form-group input {
        width: 90%;
        border: none;
        border-bottom: 1px solid #D1D1D1;
    }

    .login-form .form-group input:focus {
        border: none;
        border-bottom: 1px solid #D1D1D1;
    }

    .login-form .form-group input:focus {
        outline: none;
        border: none;
        border-bottom: 1px solid #D1D1D1;
    }

    .btn-masuk {
        margin-top: 30px;
        background: linear-gradient(92.14deg, #065446 1.24%, #56B99F 104.65%);
        color: rgb(255, 255, 255);
        font-weight: 700;
        height: 45px;
    }

    .small-text {
        margin-top: 30px;
        font-weight: 300;
        font-size: 13px;
    }

    footer {
        font-weight: 300;
        font-size: 10px;
        text-align: center;
        margin-bottom: 10px;
    }
</style>

<body>
    <div class="main">
        <div class="container">
            <div class="row home">
                <div class="col-md-8 offset-md-2 col-sm-12">
                    Welcome to <br> <span class="bolded">Sinergi Kita</span>
                </div>
            </div>
            <div class="row login-form">
                <div class="col-md-8 offset-md-2 col-sm-12">
                    <?php
                    $session = session();
                    if ($session->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= $session->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                    <?php
                    $session = session();
                    if ($session->getFlashdata('fail_login')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $session->getFlashdata('fail_login'); ?>
                        </div>
                    <?php endif; ?>
                    <form action="/auth/login" method="POST">
                        <div class="form-group">
                            <input type="email" name="email" id="" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="" placeholder="Password">
                        </div>
                        <div class="footer">
                            <button class="btn btn-block btn-masuk">Masuk &#8640;</button>
                        </div>
                    </form>

                    <p class="small-text">Ingin bergabung menjadi pelapak ? <br>
                        <a href="<?= base_url('Auth/register'); ?>"> Daftar sekarang</a> <br>
                        <a href="<?= base_url('/home'); ?>"> Kembali ke beranda</a>
                    </p>

                </div>
            </div>
            <footer class="fixed-bottom">
                All Right Reserved @Sinergi Kita 2020
            </footer>
        </div>
    </div>
</body>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

</html>