

    <section class="main-content mt-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="profile-saya px-3 ">
                        <h6 class="bold">Tambah Produk <i class="fas fa-plus-circle ml-1"></i></h6>

                        <div class="row photo-profile">
                            <div class="col-12 justify-content-center text-center">
                                <form action="">


                                    <div class="form-group text-left mt-4 px-4">
                                        <label for="exampleInputEmail1">Gambar Produk</label>

                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" accept="image/*" onchange="loadFile(event)">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>

                                    <div id="show" class="show mx-4">
                                        <i class="fas fa-camera mt-5" id="fa-camera" style="font-size: 80px;"></i>
                                        <img src="" id="img-show" class="img-fluid" alt="">
                                    </div>

                                    <div class="form-group text-left mt-4 px-4">
                                        <label for="exampleInputEmail1">Nama Produk</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1">
                                    </div>

                                    <div class="form-group text-left mt-4 px-4">
                                        <label for="exampleFormControlTextarea1">Deskripsi Produk</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>

                                    <div class="form-group text-left mt-4 px-4">
                                        <label for="exampleInputEmail1">Harga Produk</label>
                                        <input type="text" class="form-control uang" id="exampleInputEmail1">
                                    </div>

                                    <div class="row px-4 mt-5">
                                        <div class="col-4 pr-1">
                                            <button class="btn btn-block btn-outline-success">Kembali</button>
                                        </div>
                                        <div class="col-8 pl-1">
                                            <button class="btn btn-block btn-success">Simpan Perubahan</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

    </section>