<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <a class="navbar-brand" href="#">Sinergi <span class="bold">Kita</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <?php
            $uri = service('uri');
            if ($uri->getSegment(1) == "home") {
            ?>
                <li class="nav-item active">
                    <a class="nav-link" href="/home" style="width: 20% !important;">Home </a>
                </li>
            <?php
            } else {
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="/home">Home </a>
                </li>
            <?php
            } ?>


            <?php
            $uri = service('uri');
            if ($uri->getSegment(1) == "produk") {
            ?>
                <li class="nav-item active">
                    <a class="nav-link" href="/produk" style="width: 20% !important;">Produk </a>
                </li>
            <?php
            } else {
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="/produk">Produk </a>
                </li>
            <?php
            } ?>


            <?php
            $uri = service('uri');
            if ($uri->getSegment(1) == "tentang-kami") {
            ?>
                <li class="nav-item active">
                    <a class="nav-link" href="/tentang-kami" style="width: 35% !important;">Tentang Kami </a>
                </li>
            <?php
            } else {
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="/tentang-kami">Tentang Kami </a>
                </li>
            <?php
            } ?>


            <?php
            $uri = service('uri');
            if ($uri->getSegment(1) == "semua-penjual") {
            ?>
                <li class="nav-item active">
                    <a class="nav-link" href="/semua-penjual" style="width: 36% !important;">Semua Penjual </a>
                </li>
            <?php
            } else {
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="/semua-penjual">Semua Penjual</a>
                </li>
            <?php
            } ?>


            <?php
            $uri = service('uri');
            if ($uri->getSegment(1) == "wishlist") {
            ?>
                <li class="nav-item active">
                    <a class="nav-link" href="/wishlist" style="width: 46% !important;">Barang yang Disukai</a>
                </li>
            <?php
            } else {
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="/wishlist">Barang yang Disukai</a>
                </li>
            <?php
            } ?>


            <?php
            $uri = service('uri');
            if ($uri->getSegment(1) == "kontak-kami") {
            ?>
                <li class="nav-item active">
                    <a class="nav-link" href="/kontak-kami" style="width: 30% !important;">Kontak Kami</a>
                </li>
            <?php
            } else {
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="/kontak-kami">Kontak Kami</a>
                </li>
            <?php
            } ?>

            <?php
            $session = session();
            if ($session->email == null){
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Auth/index'); ?>" style="width: 30% !important;"><button class="btn btn-outline-success">Masuk</button></a>
                </li>
            <?php
            }else{
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/penjual'); ?>" ><button class="btn btn-success"><?= $session->Nama_toko; ?></button></a>
                </li>
            <?php
            }
            ?>

        </ul>
    </div>
</nav>