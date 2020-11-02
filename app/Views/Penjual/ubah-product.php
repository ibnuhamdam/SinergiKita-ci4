<section class="main-content mt-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                $session = session();
                if ($session->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= $session->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
                <div class="profile-saya px-3 ">
                    <div class="row photo-profile">
                        <div class="col-12 justify-content-center text-center">
                            <form action="<?= base_url(); ?>/penjual/update-product/<?= $barang['id']; ?>" method="POST" enctype="multipart/form-data">
                                <?php csrf_field(); ?>
                                <div id="show">
                                    <?php if ($barang['Gambar'] == null || $barang['Gambar'] == '') { ?>
                                        <img src="<?= base_url(); ?>/assets/image/image.png" class="img-fluid" id="img-show" width="300" height="300" alt="">
                                    <?php } else { ?>
                                        <img src="<?= base_url('/uploads/barang') . "/" . $barang['Gambar']; ?>" class="img-fluid" id="img-show" width="300" height="300" alt="">
                                    <?php } ?>

                                </div>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('gambar'); ?>
                                </div>
                                <br>
                                <input type="file" class="" name="gambar" id="file_ava" accept="image/*" onchange="loadFile(event)">
                                <a href="#" id="changeFoto" onclick="change()" class="text-primary <?= ($validation->hasError('avatar_toko')) ? 'is-invalid' : '' ?>">Ubah
                                    Foto</a>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('avatar_toko'); ?>
                                </div>

                                <div class="form-group text-left mt-4 px-4">
                                    <label for="exampleInputEmail1">Nama barang</label>
                                    <input type="text" name="nama" class="form-control text-center <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" value="<?= $barang['Nama']; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama'); ?>
                                    </div>
                                </div>

                                <div class="form-group text-left mt-4 px-4">
                                    <label for="exampleFormControlTextarea1">Deskripsi barang</label>
                                    <textarea class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : '' ?>" name="deskripsi" id="exampleFormControlTextarea1" rows="3"><?= $barang['Deskripsi']; ?></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('deskripsi'); ?>
                                    </div>
                                </div>

                                <div class="form-group text-left mt-4 px-4">
                                    <label for="exampleInputEmail1">Harga</label>
                                    <input type="text" name="harga" class="uang form-control text-center <?= ($validation->hasError('harga')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" value="<?= $barang['Harga']; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('harga'); ?>
                                    </div>
                                </div>

                                <div class="form-group text-left mt-4 px-4">
                                    <label for="kategori">Kategori</label>
                                    <select class="form-control text-center <?= ($validation->hasError('kategori')) ? 'is-invalid' : '' ?>" id="kategori" name="kategori">
                                        <option value="<?= $barang['Kategori'] ?>" class="text-center"><?= $barang['Kategori'] ?></option>
                                        <?php foreach ($kategori as $k) : ?>
                                            <option value="<?= $k['nama']; ?>" class="text-center"><?= $k['nama']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="row px-4 mt-5">
                                    <div class="col-4 pr-1">
                                        <a href="/penjual">
                                            <button class="btn btn-block btn-outline-success">Kembali</button>
                                        </a>
                                    </div>
                                    <div class="col-8 pl-1">
                                        <button class="btn btn-block btn-success" type="submit">Simpan Perubahan</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <!-- <h6 class="bold">Profile Saya</h6> -->



            </div>
        </div>
    </div>

</section>