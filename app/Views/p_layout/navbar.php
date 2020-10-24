<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <a class="navbar-brand" href="#">Bukhori Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

            <?php
            $uri = service('uri');
            if ($uri->getSegment(2) == "") {
            ?>
                <li class="nav-item active">
                    <a class="nav-link" href="/penjual">Home Penjual</a>
                </li>
            <?php
            } else {
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="/penjual">Home Penjual</a>
                </li>
            <?php
            } ?>

            <?php
            $uri = service('uri');
            if ($uri->getSegment(2) == "add-product") {
            ?>
                <li class="nav-item active">
                    <a class="nav-link" href="/penjual/add-product">Tambah Product </a>
                </li>
            <?php
            } else {
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="/penjual/add-product">Tambah Product </a>
                </li>
            <?php
            } ?>

            <?php
            $uri = service('uri');
            if ($uri->getSegment(2) == "ubah-profile") {
            ?>
                <li class="nav-item active">
                    <a class="nav-link" href="/penjual/ubah-profile">Ubah Profile </a>
                </li>
            <?php
            } else {
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="/penjual/ubah-profile">Ubah Profile </a>
                </li>
            <?php
            } ?>

            <?php
            $session = session();
            if ($session->email == null) {
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/home'); ?>"><button class="btn btn-success">Kembali ke Halaman Utama</button></a>
                </li>
            <?php
            } else {
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/home'); ?>"><button class="btn btn-success">Kembali ke Halaman Utama</button></a>
                </li>
            <?php
            }
            ?>


            <?php
            $uri = service('uri');
            if ($uri->getSegment(2) == "logout") {
            ?>
                <li class="nav-item active">
                    <a class="nav-link" href="/auth/logout"><button class="btn btn-outline-danger">Logout</button></a>
                </li>
            <?php
            } else {
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="/auth/logout"><button class="btn btn-outline-danger">Logout</button></a>
                </li>
            <?php
            } ?>
        </ul>
    </div>
</nav>

<section class="header">
    <div class="welcome text-center">
        <h1>Welcome, <?php $session = session();
                        echo $session->Nama_toko; ?></h1>
    </div>
</section>