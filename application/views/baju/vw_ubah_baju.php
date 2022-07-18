<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> <?php echo $judul; ?> </h3>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                            <input type="hidden" name="id" value="<?= $baju['id']; ?>">
                            <div class="form-group">
                                <label for="merk">Merk</label>
                                <input type="text" name="merk" value="<?= $baju['merk']; ?>" class="form-control"
                                    id="merk" placeholder="Merk">
                                <?= form_error('merk', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" name="harga" value="<?= $baju['harga']; ?>" class="form-control"
                                    id="harga" placeholder="Harga">
                                <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input type="text" name="stok" value="<?= $baju['stok']; ?>" class="form-control" 
                                    id="stok" placeholder="Stok">
                                <?= form_error('stok', '<small class="text-danger p1-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="ukuran">Ukuran</label>
                                <input type="text" name="ukuran" value="<?= $baju['ukuran']; ?>" class="form-control"
                                    id="ukuran" placeholder="Ukuran">
                                <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" name="keterangan" value="<?= $baju['keterangan']; ?>" class="form-control"
                                    id="keterangan" placeholder="Keterangan">
                                <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <img src="<?= base_url('assets/images/baju/') . $baju['gambar']; ?>" style="width: 100px;" class="form-control">
                                <input type="file" name="gambar" class="form-control" 
                                    id="gambar">
                                <?= form_error('gambar', '<small class="text-danger p1-3">', '</small>'); ?>
                            </div>     
                            <button class="btn btn-outline-danger btn-icon-text" a href="<?= base_url('Baju') ?>">
                                <i class="mdi mdi-close-circle-outline"></i> Tutup </button>
                            <button type="submit" class="btn btn-outline-info btn-icon-text"> Edit Baju <i
                                    class="mdi mdi-file-check btn-icon-append"></i>
                        </form>
                    </div>
                </div>
            </div>
        </div>