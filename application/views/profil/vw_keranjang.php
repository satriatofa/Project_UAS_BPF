<div class="container-fluid">
    <!-- Page Heading -->
    <div class="content-wrapper">
        <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
        <div class="row">
            <div class="col-md-12">
                <img src="<?= base_url('assets/images/baju/') . $baju['gambar']; ?>" style="width:400px" class="img-thumbnail">
            </div>
            <div class="col mr-2">
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $baju['id']; ?>">
                        <input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
                        <input type="hidden" name="stok" value="<?= $baju['stok'] ?>">
                        <div class="form-group">
                            <label for="merk">Merk</label>
                            <input type="text" name="merk" value="<?= $baju['merk']; ?>" class="form-control" id="merk" placeholder="Merk">
                            <?=form_error('merk', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input name="stok" value="<?= $baju['stok']; ?>" type="text" class="form-control"id="stok">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input name="harga" value="<?= $baju['harga']; ?>" type="text" class="form-control"id="harga">
                            </div>
                            <div class="form-group">
                                <label for="ukuran">Ukuran</label>
                                <input name="ukuran" value="<?= $baju['ukuran']; ?>" type="text" class="form-control" id="ukuran">
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input name="keterangan" value="<?= $baju['keterangan']; ?>" type="text" class="form-control" id="keterangan">
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Jumlah</label>
                                <input type="number" name="jumlah" id="jumlah" class="form-control" min='1'><?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="total">Total Harga</label>
                                <input type="text" name="total" id="total" class="form-control">
                            </div>
                            <button type="submit" id="tambah" name="tambah" class="btn btn-primary float-right">Tambah Ke Keranjang</button>
                    </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>