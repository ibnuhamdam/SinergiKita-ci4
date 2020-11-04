<section class="detail-barang mb-4">
    <div class="container">

        <?php foreach ($barang as $b) : ?>
            <div class="row">
                <div class="col-sm-12 col-md-12 header-image">
                    <?php if ($b["Gambar"] != null) { ?>
                        <img src="<?= base_url('/uploads/barang/') . '/' . $b["Gambar"]; ?>" class="img-fluid" alt="">
                    <?php } else { ?>
                        <img src="/assets/image/image.png" class="img-fluid" alt="">
                    <?php } ?>
                </div>
                <div class="col-sm-12 col-md-12 deskripsi py-4 px-5">
                    <h3 class="text-hijau-1"><?= $b["Nama"]; ?></h3>
                    <p class="pt-3"><?= $b["Deskripsi"]; ?></p>
                    <small class="text-success"><?= $b["Alamat"]; ?></small>
                    <h1 class="bold text-hijau-2">Rp <?= $b["Harga"]; ?></h1>
                    <button class="btn btn-penjual mt-2">
                        <?php if ($b["Gambar"] != null) { ?>
                            <img src="<?= base_url('/uploads/penjual/') . '/' . $b["Image_logo"]; ?>" width="30" height="30" class="rounded-circle" alt="">
                        <?php } else { ?>
                            <img src="/assets/image/shop.png" width="30" height="30" class="rounded-circle" alt="">
                        <?php } ?>
                        <?= $b["Toko"]; ?></button>

                </div>
            </div>
       
    </div>
</section>

<section class="space"></section>

<section class="beli-sekarang">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-6 py-3 tambah-barang-disukai">
                <a href="">
                    <div class="row">
                        <div class="col-3"> <i class="far fa-heart text-danger"></i></div>
                        <div class="col-7" style="font-size: 14px;">Tambahkan ke Barang Disukai</div>
                    </div>
                </a>

            </div>
            <div class="col-6 beli-btn pt-4">
                <a href="">
                    <div class="row ">
                        <div class="col-12 ">
                            Beli Sekarang
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>