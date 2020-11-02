<section class="main-home">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 search p-4">
                <form action="#">
                    <div class="form-group">
                        <div class="input-group relative ">
                            <form action="<?= base_url('Home/produk'); ?>" method="POST">
                                <input type="text" name="keyword" class="form-control search-input shadow" placeholder="Cari Barang" aria-label="Search">
                                <a href="" type="submit"><i class="fas fa-search search-icon"></i></a>
                            </form>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

<section class="list-kategori">
    <div class="container">
        <div class="row ">

            <div class="col-3 pt-3 text-center">
                <a href="/Home/kategori/makanan">
                    <div class="kategori-item shadow p-2">
                        <img src="/assets/image/food.png" class="img-fluid" width="50" alt="">
                    </div>
                </a>
                Makanan
            </div>


            <div class="col-3 pt-3 text-center">
                <a href="/Home/kategori/pakaian">
                    <div class="kategori-item shadow p-2">
                        <img src="/assets/image/shirt.png" class="img-fluid" width="50" alt="">
                    </div>
                </a>
                Pakaian
            </div>

            <div class="col-3 pt-3 text-center">
                <a href="/Home/kategori/sayuran">
                    <div class="kategori-item shadow p-2">
                        <img src="/assets/image/spinach.png" class="img-fluid" width="50" alt="">
                    </div>
                </a>
                Sayuran
            </div>

            <div class="col-3 pt-3 text-center">
                <a href="/Home/kategori/elektronik">
                    <div class="kategori-item shadow p-2">
                        <img src="/assets/image/device.png" class="img-fluid" width="50" alt="">
                    </div>
                </a>
                Elektronik
            </div>

            <div class="col-3 pt-3 text-center">
                <a href="/Home/kategori/kesehatan">
                    <div class="kategori-item shadow p-2">
                        <img src="/assets/image/heart.png" class="img-fluid" width="50" alt="">
                    </div>
                </a>
                Kesehatan
            </div>


            <div class="col-3 pt-3 text-center">
                <a href="/Home/kategori/alat">
                    <div class="kategori-item shadow p-2">
                        <img src="/assets/image/settings.png" class="img-fluid" width="50" alt="">
                    </div>
                </a>
                Alat-alat
            </div>

            <div class="col-3 pt-3 text-center">
                <a href="/Home/kategori/penyewaan">
                    <div class="kategori-item shadow p-2">
                        <img src="/assets/image/real-estate.png" class="img-fluid" width="50" alt="">
                    </div>
                </a>
                Penyewaan
            </div>

            <div class="col-3 pt-3 text-center">
                <a href="/Home/kategori/lainnya">
                    <div class="kategori-item shadow p-2">

                    </div>
                </a>
                Lainnya
            </div>

        </div>
    </div>
</section>

<section class="produk py-3">
    <div class="container">
        <h5 class="mb-3 bold pr-3">Produk  <?php
        $session = session();
        if ($session->getFlashdata('kategori')) : ?>
            <span class="badge badge-pill badge-primary ml-2">
                        <?= $session->getFlashdata('kategori'); ?>
            </span>
        <?php endif; ?></h5>
        <h5></h5>
        <div class="row">
            <?php if($barang != null){ ?>
                <?php foreach  ($barang as $b)  : ?>

                        <div class="col-6 col-md-3 mt-3">
                            <a href="/Home/detail_barang/<?= $b['id']; ?>">
                                <div class="card text-center" style="width: 100%;">
                                <?php if($b["Gambar"] != null) { ?>
                                    <img src="<?= base_url('uploads/barang').'/'.$b['Gambar']; ?>" class="card-img-top img-fluid" alt="<?= $b['Nama']; ?>">
                                <?php }else{ ?>
                                    <img src="/assets/image/image.png" class="card-img-top img-fluid" alt="<?= $b['Nama']; ?>">
                                <?php } ?>
                                    <div class="card-body">
                                        <p class="card-text judul-text  "><?= $b['Nama']; ?></p>
                                        <p class="card-text harga-text bold">Rp <?= $b["Harga"]; ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <?= $b["Alamat"]; ?>
                                    </div>
                                </div>
                            </a>
                        </div>

                <?php endforeach; ?>
            <?php }else{ ?>
                <div class="col-12 col-md-12 mt-3 text-center">
                    <img src="/assets/image/tidak-tersedia.png" class="img-fluid mb-2" width="20%" alt="">
                    <h4 class="px-2">Maaf Barang tidak tersedia</h4>
                    <a href="/Home/home"><button class="btn btn-outline-success">Kembali ke Beranda</button></a>
                </div>
            <?php } ?>

            <div class="col-12 mt-5 text-center">
                <div class="row justify-content-center">
                    <div class="load-more col-12 text-center mt-3">
                        <?= $pager->links('barang', 'bs_pager'); ?>
                    </div>

                </div>
            </div>


        </div>
    </div>
</section>