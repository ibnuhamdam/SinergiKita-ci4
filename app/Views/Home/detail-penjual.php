    <?php foreach($user as $u): ?>
    <section class="detail-penjual">
        <?php if($u["Image_logo"] != null){ ?>
            <div class="bg-image" style="background-image: url('/uploads/penjual/<?= $u["Image_logo"]; ?>');"></div>
        <?php }else{ ?>
            <div class="bg-image" style="background-image: url('/assets/image/sayuran.png');"></div>
        <?php } ?>
        <div class="deskripsi text-center">
            <div class="container">
                <div class="row">
                    <div class="col-10 offset-1">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title"><?= $u["Nama"]; ?></h1>
                                <h6 class="card-subtitle mb-2 text-hijau-1"><?= $u["Alamat"]; ?></h6>
                                <p class=" card-text"><?= $u["Deskripsi"]; ?></p>
                                <h6 class="card-subtitle mb-2 text-hijau-1 bold"><?= $u["No_handphone"]; ?></h6>
                                <button class="btn btn-success px-4"><i class="fab fa-whatsapp"></i> Hubungi
                                    Penjual</button>

                                <div class="row mt-3">
                                    <div class="col-6">
                                        <h1><?= $total; ?></h1> Barang Dijual
                                    </div>
                                    <div class="col-6 mt-2" style="font-size: 14px;">
                                        Bergabung Sejak <span class="text-hijau-1"><?php $date = strtotime($u["created_at"]); echo date('d M Y', $date); ?></span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endforeach; ?>

    <section class="produk py-3 mt-2">
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


