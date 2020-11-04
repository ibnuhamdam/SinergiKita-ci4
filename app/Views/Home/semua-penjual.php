<section class="main-home">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 search p-4">
                <form action="#">
                    <div class="form-group">
                        <div class="input-group relative ">
                            <input type="text" class="form-control search-input shadow" placeholder="Cari Penjual" aria-label="Search">
                            <a href=""><i class="fas fa-search search-icon"></i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

<section class="daftar-penjual pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5 class="bold">Daftar Nama Penjual</h5>
                <div class="filter">
                    <a href="#" data-toggle="collapse" data-target="#select-lokasi">
                        <p>Filter Lokasi <i class="fas fa-sort-down"></i></p>
                    </a>
                </div>
                <div class="collapse" id="select-lokasi">
                    <select id="inputState" class="form-control text-center">
                        <option selected class="text-center">-- Pilih Lokasi --</option>
                        <option class="text-center">Karangpandan</option>
                    </select>
                </div>

                <div class="row justify-content-center mt-3">

                    <?php foreach ($user as $u) : ?>
                        <div class="col-6 col-md-4 py-2">
                            <div class="Penjual">
                                <a href="<?= base_url("Home/detail_penjual/") . '/' . $u['id']; ?>">
                                    <div class="card text-center">
                                        <div class="col-12">
                                            <?php if ($u["Image_logo"] != null) {
                                            ?>
                                                <img src="<?= base_url('/uploads/penjual') . '/' . $u["Image_logo"]; ?>" class="rounded-circle " width="120" height="120" alt="ava">
                                            <?php
                                            } else {
                                            ?>
                                                <img src="/assets/image/shop.png" class="rounded-circle " width="120" height="120" alt="ava">
                                            <?php
                                            } ?>

                                        </div>
                                        <div class="card-body">
                                            <h5><?= $u["Nama"]; ?></h5>
                                            <p class="card-text"><?= $u["Deskripsi"]; ?>
                                            </p>

                                        </div>
                                        <div class="card-footer">
                                            <p class="card-text bold"><?= $u["Alamat"]; ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

            </div>

            <div class="col-12 mt-5 text-center">
                <div class="load-more col-12 text-center mt-3">
                    <?= $pager->links('barang', 'bs_pager'); ?>
                </div>
            </div>

        </div>
    </div>
</section>