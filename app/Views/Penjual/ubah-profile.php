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

                    <ul class="nav nav-pills mb-4 justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link btn btn-outline-success active btn-block" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Profile Toko</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link btn btn-outline-success" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile Saya</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row photo-profile">
                                <div class="col-12 justify-content-center text-center">
                                    <form action="/penjual/update_toko" method="POST">
                                        <?php csrf_field(); ?>
                                        <img src="../assets/image/b-logo.jpg" class=" rounded-circle" width="120" height="120" alt="">
                                        <br>
                                        <a href="" class="text-danger">Hapus Foto</a> | <a href="" class="text-primary">Ubah
                                            Foto</a>

                                        <div class="form-group text-left mt-4 px-4">
                                            <label for="exampleInputEmail1">Nama Toko</label>
                                            <input type="text" name="nama" class="form-control text-center" id="exampleInputEmail1" value="<?= $toko['Nama']; ?>" disabled>
                                        </div>

                                        <div class="form-group text-left mt-4 px-4">
                                            <label for="exampleFormControlTextarea1">Deskripsi Toko</label>
                                            <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3" placeholder="<?= $toko['Deskripsi']; ?>"></textarea>
                                        </div>

                                        <div class="form-group text-left mt-4 px-4">
                                            <label for="exampleInputEmail1">Alamat Toko</label>
                                            <input type="text" name="alamat" class="form-control text-center" id="exampleInputEmail1" value="<?= $toko['Alamat']; ?>">
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
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="row photo-profile">
                                <div class="col-12 justify-content-center text-center">
                                    <form action="/penjual/update_pemilik" method="POST">
                                        <?php csrf_field(); ?>

                                        <div class="form-group text-left mt-4 px-4">
                                            <label for="exampleInputEmail1">Nama Pemilik</label>
                                            <input type="text" name="nama" class="form-control text-center <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" value="<?= $user['Nama']; ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('nama'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group text-left mt-4 px-4">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="hidden" name="email" value="<?= $user['Email']; ?>">
                                            <input type="email" name="email" class="form-control text-center" id="exampleInputEmail1" value="<?= $user['Email']; ?>" disabled>
                                        </div>

                                        <div class="form-group text-left mt-4 px-4">
                                            <label for="exampleInputEmail1">Password</label>
                                            <input type="password" name="password" class="form-control text-center <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" value="<?= $user['Password']; ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('password'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group text-left mt-4 px-4">
                                            <label for="exampleInputEmail1">No Ktp</label>
                                            <input type="hidden" name="ktp" value="<?= $user['No_ktp']; ?>">
                                            <input type="number" name="ktp" class="form-control text-center" id="exampleInputEmail1" value="<?= $user['No_ktp']; ?>" disabled>
                                        </div>

                                        <div class="form-group text-left mt-4 px-4">
                                            <label for="exampleInputEmail1">Alamat</label>
                                            <input type="text" name="alamat" class="form-control text-center <?= ($validation->hasError('alamat')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" value="<?= $user['Alamat']; ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('alamat'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group text-left mt-4 px-4">
                                            <label for="exampleInputEmail1">No Handphone</label>
                                            <input type="number" name="no_handphone" class="form-control text-center <?= ($validation->hasError('no_handphone')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" value="<?= $user['No_handphone']; ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('no_handphone'); ?>
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

                    <!-- <h6 class="bold">Profile Saya</h6> -->



                </div>
            </div>
        </div>

</section>