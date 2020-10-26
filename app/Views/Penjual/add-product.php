<section class="main-content mt-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="profile-saya px-3 ">
                    <h6 class="bold">Tambah Produk <i class="fas fa-plus-circle ml-1"></i></h6>

                    <div class="row photo-profile">
                        <div class="col-12 justify-content-center text-center">
                            <!-- <form action="<?= base_url(); ?>/penjual/save_product" method="POST" enctype="multipart/form-data">
                                

                                <div class="form-group text-left mt-4 px-4">
                                    <label for="exampleInputEmail1">Gambar Produk</label>

                                    <div class="custom-file">
                                        <input type="file" name="gambar" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : '' ?>" id="customFile" accept="image/*" onchange="loadFile(event)">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>

                                <div id="show" class="show-camera mx-4">
                                    <i class="fas fa-camera mt-5" id="fa-camera" style="font-size: 80px;"></i>
                                    <img src="" id="img-show" class="img-fluid" alt="">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('gambar'); ?>
                                    </div>
                                </div>

                                <div class="form-group text-left mt-4 px-4">
                                    <label for="exampleInputEmail1">Nama Produk</label>
                                    <input type="text" name="nama" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama'); ?>
                                    </div>
                                </div>

                                <div class="form-group text-left mt-4 px-4">
                                    <label for="exampleFormControlTextarea1">Deskripsi Produk</label>
                                    <textarea class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : '' ?>" name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('deskrispi'); ?>
                                    </div>
                                </div>

                                <div class="form-group text-left mt-4 px-4">
                                    <label for="exampleInputEmail1">Harga Produk</label>
                                    <input type="text" name="harga" class="form-control uang <?= ($validation->hasError('harga')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('harga'); ?>
                                    </div>
                                </div>

                                <div class="form-group text-left mt-4 px-4">
                                    <label for="kategori">Kategori</label>
                                    <select class="form-control text-center <?= ($validation->hasError('kategori')) ? 'is-invalid' : '' ?>" id="kategori" name="kategori">
                                        <option>-- Pilih Kategori --</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('kategori'); ?>
                                    </div>
                                </div>

                                <div class="row px-4 mt-5">
                                    <div class="col-4 pr-1">
                                        <button class="btn btn-block btn-outline-success">Kembali</button>
                                    </div>
                                    <div class="col-8 pl-1">
                                        <button class="btn btn-block btn-success">Simpan Perubahan</button>
                                    </div>
                                </div>

                            </form> -->
                            <form action="<?= base_url(); ?>/penjual/save-product" method="POST" enctype="multipart/form-data">

                            <?php csrf_field(); ?>

                                <div class="form-group text-left mt-4 px-4">
                                    <label for="exampleInputEmail1">Gambar Produk</label>

                                    <div class="custom-file">
                                        <input type="file" name="gambar" class=" <?= ($validation->hasError('gambar')) ? 'is-invalid' : '' ?>" id="customFile" accept="image/*" onchange="loadFile(event)">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                        <div class="invalid-feedback mt-3">
                                            <?= $validation->getError('gambar'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div id="show" class="show-camera mx-4">
                                    <i class="fas fa-camera mt-5" id="fa-camera" style="font-size: 80px;"></i>
                                    <img src="" id="img-show" class="img-fluid" alt="">
                                    
                                </div>

                                <div class="form-group text-left mt-4 px-4">
                                    <label for="exampleInputEmail1">Nama barang</label>
                                    <input type="text" name="nama" class="form-control text-center <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" value="<?= old('nama'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama'); ?>
                                    </div>
                                </div>

                                <div class="form-group text-left mt-4 px-4">
                                    <label for="exampleInputEmail1">Deskripsi barang</label>
                                    <textarea type="text" name="deskripsi" class="form-control text-center <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" ><?= old('deskripsi'); ?></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('deskripsi'); ?>
                                    </div>
                                </div>

                                <div class="form-group text-left mt-4 px-4">
                                    <label for="exampleInputEmail1">Harga barang</label>
                                    <input type="text" name="harga" class="form-control uang text-center <?= ($validation->hasError('harga')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" value="<?= old('harga'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('harga'); ?>
                                    </div>
                                </div>

                                <div class="form-group text-left mt-4 px-4">
                                    <label for="kategori">Kategori</label>
                                    <select class="form-control text-center <?= ($validation->hasError('kategori')) ? 'is-invalid' : '' ?>" id="kategori" name="kategori">
                                        <option>-- Pilih Kategori --</option>
                                        <option value="makanan">Makanan</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('kategori'); ?>
                                    </div>
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
            </div>
        </div>

</section>