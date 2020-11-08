<section class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tambah-produk px-3 py-4">
                    <a href="/penjual/add-product"><button class="btn btn-pills btn-success-2 btn-block btn-add">Tambah Produk <i class="fas fa-plus-circle ml-1"></i></button></a>
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
                                    <div class="col-5"><button class="btn btn-block btn-outline-danger" data-toggle="modal" data-id="<?= $brg['id']; ?>" data-target="#delete"><i class="fas fa-trash"></i> Hapus
                                            Produk</button>
                                    </div>
                                    <div class="col-7 ubah-produk">
                                        <a href="<?= base_url('penjual/ubah-product') . '/' . $brg['id'] ?>"><button class="btn btn-block btn-primary"><i class="fas fa-pencil-alt"></i> Ubah Produk</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <!-- Modal Delete -->
                    <div class="fade modal" id="delete" tabindex="-1" aria-labelledby="delete" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered ">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h5 class="modal-title text-center" id="delete">Delete Produk</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body justify-content-center text-center">
                                    <i class="fas fa-question-circle text-primary" style="font-size:100px;"></i>
                                    <h5 class="mt-2">Apakah anda yakin untuk menghapus produk ini ?</h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    <a href="" id="delete-btn"><button type="button" class="btn btn-outline-danger">Hapus Produk</button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mt-5 text-center">
                            <div class="row justify-content-center">
                                <div class="load-more col-12 text-center mt-3">
                                    <?= $pager->links('barang', 'bs_pager'); ?>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>