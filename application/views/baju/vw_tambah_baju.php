<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> <?php echo $judul; ?> </h3>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="merk">Merk</label>
                        <input type="text" name="merk" value="<?=set_value('merk');?>" class="form-control" id="merk" placeholder="Merk">
                        <?=form_error('merk', '<small class="text-danger pl-3">', '</small>');?>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" value="<?=set_value('harga');?>" class="form-control" id="harga" placeholder="Harga">
                        <?=form_error('harga', '<small class="text-danger pl-3">', '</small>');?>
                    </div>
                    <div class="form-group">
							<label for="stok">Stok</label>
							<input name="stok" type="text" value="<?= set_value('stok'); ?>" class="form-control" id="stok" placeholder="Stok">
							<?= form_error('semester', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
                    <div class="form-group">
                        <label for="ukuran">Ukuran</label>
                        <input type="text" name="ukuran" value="<?=set_value('ukuran');?>" class="form-control" id="ukuran" placeholder="Ukuran">
                        <?=form_error('ukuran', '<small class="text-danger pl-3">', '</small>');?>
                    </div>

                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" value="<?=set_value('keterangan');?>" class="form-control" id="keterangan" placeholder="Keterangan">
                        <?=form_error('keterangan', '<small class="text-danger pl-3">', '</small>');?>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                            <div>
                                <input type="file" name="gambar" class="form-control" id="gambar">
                            </div>  
                    </div>
                    <a href="<?=base_url('Baju')?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Baju</button>
                </form>
            </div>
        </div>
    </div>
</div>