<div class="container-fluid">
    <!-- Page Heading -->
    <div class="content-wrapper">
        <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
        <div class="row">
            <div class="col-md-12">
                <?= $this->session->flashdata('message'); ?>
            </div>
            <?php $i = 1; ?>
            <?php foreach ($baju as $us) : ?>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div><?= $us['merk'] ?></div>
                                    <div class="tetxt-xs font-weight-bold text-gray-800">Rp.<?= $us['harga'] ?></div>
                                    <div>Stok <span class="label gradient-1 rounded"><?= $us['stok']; ?></span></div>
                                </div>
                                
                                <div class="col-auto">
                                    <img src="<?= base_url('assets/images/baju/') . $us['gambar']; ?>" style="width:150px" class="img-thumbnail">
                                </div>
                                </div>

                                <div class="align-items-center">
                                    <a href="<?= base_url('Profil/keranjang/') . $us['id'] ?>" class="label gradient-2 rounded">Beli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
        </div>
    </div>
</div>