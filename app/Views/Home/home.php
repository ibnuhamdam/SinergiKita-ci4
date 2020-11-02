<section class="main-home">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 search p-4">
                <form action="<?= base_url('Home/produk'); ?>" method="POST">
                    <div class="form-group">
                        <div class="input-group relative ">
                                <input type="text" name="keyword" class="form-control search-input shadow" placeholder="Cari Barang" aria-label="Search">
                                <a href="" type="submit"><i class="fas fa-search search-icon"></i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

<section class="space">

</section>

<section class="quote">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 py-3">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner text-center">
                        <div class="carousel-item px-5 active">
                            “Sesungguhnya yang paling suci dari apa yang kamu makan adalah yang berasal dari penghasilanmu sendiri”
                        </div>
                        <div class="carousel-item px-5">
                            “Bagikanlah harta bendamu”
                        </div>
                        <div class="carousel-item px-5">
                            “Ini contoh quote ke 3, semoga berkah, Aamiin”
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <i class="fas fa-caret-left text-dark"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <i class="fas fa-caret-right text-dark"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="space">

</section>

<section class="kategori py-3">
    <div class="container">
        <p class="mb-3 bold">Kategori</p>
        <div class="row">

            <div class="col-3 text-center">
                <a href="<?= base_url('/Home/kategori/makanan'); ?>">
                    <div class="kategori-item shadow p-2">
                        <img src="/assets/image/food.png" class="img-fluid" width="50" alt="">

                    </div>
                    <h6 class="text-hijau-1 mt-1">Makanan</h6>
                </a>
            </div>
            <div class="col-3 text-center">
                <a href="<?= base_url('/Home/kategori/elektronik'); ?>">
                    <div class="kategori-item shadow p-2 text-center">
                        <img src="/assets/image/device.png" class="img-fluid" width="50" alt="">
                    </div>
                    <h6 class="text-hijau-1 mt-1">Elektronik</h6>
                </a>
            </div>
            <div class="col-3 text-center">
                <a href="<?= base_url('/Home/kategori/pakaian'); ?>">
                    <div class="kategori-item shadow p-2 text-center">
                        <img src="/assets/image/shirt.png" class="img-fluid" width="50" alt="">
                    </div>
                    <h6 class="text-hijau-1 mt-1">Pakaian</h6>
                </a>
            </div>
            <div class="col-3 text-center">
                <a href="<?= base_url('/Home/kategori/sayuran'); ?>">
                    <div class="kategori-item shadow p-2 text-center">
                        <img src="/assets/image/spinach.png" class="img-fluid" width="50" alt="">
                    </div>
                    <h6 class="text-hijau-1 mt-1">Sayuran</h6>
                </a>
            </div>

        </div>
    </div>
</section>

<hr>

<section class="produk py-3">
    <div class="container">
        <p class="mb-3 bold">Produk</p>
        <div class="row">

            <?php foreach ($barang as $b) : ?>
                <div class="col-6 col-md-3 mt-3">
                    <a href="/Home/detail_barang/<?= $b['id']; ?>">
                        <div class="card text-center" style="width: 100%;">
                            <?php if ($b['Gambar'] != '') { ?>
                                <img src="<?= base_url('/uploads/barang') . '/' . $b['Gambar']; ?>" class="card-img-top img-fluid" alt="<?= $b["Nama"]; ?>">
                            <?php } else { ?>
                                <img src="<?= base_url(); ?>/assets/image/image.png" class="card-img-top img-fluid" alt="<?= $b["Nama"]; ?>">
                            <?php } ?>
                            <div class="card-body">
                                <p class="card-text judul-text  "><?= $b['Nama']; ?></p>
                                <p class="card-text harga-text bold">Rp <?= $b['Harga']; ?></p>
                            </div>
                            <div class="card-footer">
                                <?= $b['Alamat']; ?>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>


            <div class="load-more col-12 text-center mt-3">
                <a href="<?= base_url('Home/produk'); ?>">
                    <button class="btn btn-success px-4">Lihat Barang Lainnya</button>
                </a>
            </div>

        </div>
    </div>
</section>