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
        background-image: url('<?= base_url() ?>/assets/image/regis-header.png');
        background-size: cover;
        background-repeat: no-repeat;
        height: 400px;
    }

    .home {
        font-size: 34px;
        line-height: 36px;
        color: #65AE9B;
        font-style: normal;
        font-weight: 300;
        padding-right: 10px;
        padding-top: 185px;
        text-align: right;
    }

    .bolded {
        font-weight: 700;
    }

    .login-form {
        padding-left: 10px;
        padding-top: 120px;
        margin-bottom: 60px;
    }

    .login-form .form-group {
        padding: 18px 15px;
    }

    .login-form .form-group input {
        width: 90%;
        border: none;
        border-bottom: 1px solid #D1D1D1;
        color: rgb(41, 41, 41);
    }

    .login-form .form-group input[type="number"] {
        width: 80%;
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

    .indo-flag {
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25);
    }
</style>

<body>
    <div class="main">
        <div class="container">
            <div class="row home">
                <div class="col-md-8 offset-md-2 col-sm-12">
                    Daftar untuk<br> menjadi mitra <br> <span class="bolded">Sinergi Kita</span>
                </div>
            </div>
            <div class="row login-form">
                <div class="col-md-8 offset-md-2 col-sm-12">
                    <form action="/auth/save" method="POST">
                        <?= csrf_field(); ?>

                        <div class="form-group">
                            <input type="text" name="nama_pemilik" class="form-control <?= ($validation->hasError('nama_pemilik')) ? 'is-invalid' : '' ?>" id="" placeholder="Nama Pemilik Toko / Usaha" value="<?= old('nama_pemilik'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama_pemilik'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="nama_toko" id="" class="form-control <?= ($validation->hasError('nama_toko')) ? 'is-invalid' : '' ?>" placeholder="Nama Toko / Usaha" value="<?= old('nama_toko'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama_toko'); ?>
                            </div>
                        </div>
                        <div class=" form-group">
                            <input type="email" name="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" id="" placeholder="Email" value="<?= old('email'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('email'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>" placeholder="Password" value="<?= old('password'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('password'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="no_ktp" class="form-control <?= ($validation->hasError('no_ktp')) ? 'is-invalid' : '' ?>" id="" placeholder="Nomor Identitas (KTP/SIM)" value="<?= old('no_ktp'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('no_ktp'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="validationTextarea">Alamat Lengkap</label>
                            <textarea class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : '' ?>" name="alamat" rows="3" value="<?= old('alamat'); ?>" id="validationTextarea"></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('alamat'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="pr-3 " id="basic-addon1"><img src="/assets/image/indonesia-flag.png" class="img-fluid indo-flag" width="25" alt=""></span>
                                <input type="number" class="form-control <?= ($validation->hasError('no_handphone')) ? 'is-invalid' : '' ?>" name="no_handphone" id="" placeholder="No Handphone" value="<?= old('no_handphone'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('no_handphone'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="footer">

                            <button class="btn btn-block btn-masuk">Daftar &#8640;</button>
                        </div>
                    </form>

                    <p class="small-text">Sudah menjadi mitra pelapak ? <br>
                        <a href="<?= base_url('Auth/index'); ?>"> Masuk disini</a></p>
                </div>
            </div>

        </div>
        <footer class="fixed">
            All Right Reserved @Sinergi Kita 2020
        </footer>
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