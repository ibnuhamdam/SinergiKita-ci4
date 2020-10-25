<section class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tambah-produk px-3 py-4">
                    <button class="btn btn-pills btn-success-2 btn-block btn-add">Tambah Produk <i class="fas fa-plus-circle ml-1"></i></button>
                </div>
            </div>

            <div class="col-12 ">
                <?php
                $session = session();
                if ($session->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= $session->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
                <div class="produk-saya px-3 ">
                    <h6 class="bold">Produk Saya</h6>

                    <?php foreach ($barang as $brg) : ?>
                        <div class="row produks">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-5">
                                        <?php if ($brg['Gambar'] == null || $brg['Gambar'] == '') { ?>
                                            <img src="../assets/image/image.png" alt="" class="img-fluid">
                                        <?php } else { ?>
                                            <img src="<?= base_url('/uploads/barang/') . '/' . $brg['Gambar']; ?>" alt="" class="img-fluid">
                                        <?php } ?>
                                    </div>
                                    <div class="col-7 px-2 py-2">
                                        <h5><?= $brg['Nama']; ?></h5>
                                        <h5 class="text-hijau-1 bold">Rp <span class="uang"><?= $brg['Harga']; ?></span></h5>
                                        <p><?= $brg['Deskripsi']; ?></p>
                                    </div>

                                </div>
                                <div class="row mt-1">
                                    <div class="col-5">
                                        <a href="#"><button class="btn btn-block btn-outline-danger"><i class="fas fa-trash"></i> Hapus
                                                Produk</button></a>
                                    </div>
                                    <div class="col-7 ubah-produk">
                                        <a href="<?= base_url('penjual/ubah-product') . '/' . $brg['id'] ?>"><button class="btn btn-block btn-primary"><i class="fas fa-pencil-alt"></i> Ubah Produk</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <!-- <div class="row produks">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-5"><img src="../assets/image/sayuran.png" alt="" class="img-fluid">
                                </div>
                                <div class="col-7 px-2 py-2">
                                    <h5>Sayur-sayuran</h5>
                                    <h5 class="text-hijau-1 bold">Rp 2.500 / ikat</h5>
                                    <p>Sayur-sayuran asli yang dipetik dari tawangmangu, dan kualitas yang terjamin,
                                        segar dan murah !</p>
                                </div>

                            </div>
                            <div class="row mt-1">
                                <div class="col-5">
                                    <a href=""><button class="btn btn-block btn-outline-danger"><i class="fas fa-trash"></i> Hapus
                                            Produk</button></a>
                                </div>
                                <div class="col-7 ubah-produk">
                                    <a href=""><button class="btn btn-block btn-primary"><i class="fas fa-pencil-alt"></i> Ubah Produk</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row produks">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-5"><img src="../assets/image/sayuran.png" alt="" class="img-fluid">
                                </div>
                                <div class="col-7 px-2 py-2">
                                    <h5>Sayur-sayuran</h5>
                                    <h5 class="text-hijau-1 bold">Rp 2.500 / ikat</h5>
                                    <p>Sayur-sayuran asli yang dipetik dari tawangmangu, dan kualitas yang terjamin,
                                        segar dan murah !</p>
                                </div>

                            </div>
                            <div class="row mt-1">
                                <div class="col-5">
                                    <a href=""><button class="btn btn-block btn-outline-danger"><i class="fas fa-trash"></i> Hapus
                                            Produk</button></a>
                                </div>
                                <div class="col-7 ubah-produk">
                                    <a href=""><button class="btn btn-block btn-primary"><i class="fas fa-pencil-alt"></i> Ubah Produk</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row produks">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-5"><img src="../assets/image/sayuran.png" alt="" class="img-fluid">
                                </div>
                                <div class="col-7 px-2 py-2">
                                    <h5>Sayur-sayuran</h5>
                                    <h5 class="text-hijau-1 bold">Rp 2.500 / ikat</h5>
                                    <p>Sayur-sayuran asli yang dipetik dari tawangmangu, dan kualitas yang terjamin,
                                        segar dan murah !</p>
                                </div>

                            </div>
                            <div class="row mt-1">
                                <div class="col-5">
                                    <a href=""><button class="btn btn-block btn-outline-danger"><i class="fas fa-trash"></i> Hapus
                                            Produk</button></a>
                                </div>
                                <div class="col-7 ubah-produk">
                                    <a href=""><button class="btn btn-block btn-primary"><i class="fas fa-pencil-alt"></i> Ubah Produk</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row produks">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-5"><img src="../assets/image/sayuran.png" alt="" class="img-fluid">
                                </div>
                                <div class="col-7 px-2 py-2">
                                    <h5>Sayur-sayuran</h5>
                                    <h5 class="text-hijau-1 bold">Rp 2.500 / ikat</h5>
                                    <p>Sayur-sayuran asli yang dipetik dari tawangmangu, dan kualitas yang terjamin,
                                        segar dan murah !</p>
                                </div>

                            </div>
                            <div class="row mt-1">
                                <div class="col-5">
                                    <a href=""><button class="btn btn-block btn-outline-danger"><i class="fas fa-trash"></i> Hapus
                                            Produk</button></a>
                                </div>
                                <div class="col-7 ubah-produk">
                                    <a href=""><button class="btn btn-block btn-primary"><i class="fas fa-pencil-alt"></i> Ubah Produk</button></a>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="row">
                        <div class="col-12 mt-5 text-center">
                            <div class="row justify-content-center">
                                <nav aria-label="..." class="justify-content-center">
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>