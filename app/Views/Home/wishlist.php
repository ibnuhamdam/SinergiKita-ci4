<section class="barang-disukai pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="row justify-content-center mt-3">
                    <div class="col-12 mb-2">
                        <div class="row">
                            <div class="col-10">
                                <h4 class="bold text-white">Barang yang disukai</h4>
                            </div>
                            <div class="col-2">
                                <i class="far fa-heart text-danger" style="font-size: 25px;"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mx-3">
                            <?php
                            $session = session();
                            if ($session->getFlashdata('pesan')) : ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?= $session->getFlashdata('pesan'); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif; ?>
                    </div>

                   

                    <div class="col-12">
                        <div class="container">
                            <?php if($wishlist != null){ ?>
                                <?php foreach    ($wishlist as $w)    : ?>
                                    <div class="row card-barang mt-4">
                                    
                                        <div class="col-4" style="padding: 0;">
                                            <?php if($w["Gambar"] != null){ ?>
                                                <a href="/Home/detail_barang/<?= $w["id"]; ?>">
                                                    <img src="/uploads/barang/<?= $w["Gambar"]; ?>" class="img-fluid" alt="">
                                                </a>
                                            <?php }else{ ?>
                                                <a href="/Home/detail_barang/<?= $w["id"]; ?>">
                                                    <img src="/assets/image/image.png" class="img-fluid" alt="">
                                                </a>
                                            <?php } ?>
                                        </div>
                                        
                                        <div class="col-6 py-4 px-4">
                                            <p class="mb-0"><?= $w["Nama"]; ?></p>
                                            <h4 class="text-hijau-2 bold">Rp <?= $w["Harga"]; ?></h4>
                                        </div>
                                        <div class="col-2 py-5 px-1 bg-danger" style="border-top-right-radius: 30px;border-bottom-right-radius: 30px;">
                                            <a href="/Home/delete_wishlist/<?= $w["wid"]; ?>"><button class="btn"><i class="fa fa-trash text-white"></i></button></a>
                                        </div>
                                    </div>
                                
                                <?php endforeach; ?>
                            <?php }else{ ?>
                                <p class="text-white text-center"> Sepertinya anda belum menambahkan barang disukai, </p>
                                <div class="text-center">
                                <a href=""> <button class="btn btn-success justify-content-center"> Tambahkan Sekarang ! </button></a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>

            </div>

            <?php if($pager != null){ ?>
            <div class="col-12 mt-5 text-center">
                <div class="row justify-content-center">
                    <div class="load-more col-12 text-center mt-3">
                        <?= $pager->links('barang', 'bs_pager'); ?>
                    </div>

                </div>
            </div>
            <?php }else{ ?>
            <?php } ?>

        </div>
    </div>
</section>