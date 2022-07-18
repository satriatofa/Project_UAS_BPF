<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> <?php echo $judul; ?> </h3>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <div class="col-md-6"><a href="<?=base_url()?>Baju/tambah" class="btn btn-info mb-2">Tambah Baju</a>
                    <div class="col-md-12">
                                <?=$this->session->flashdata('message');?>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Gambar</td>
                                            <td>Merk</td>
                                            <td>Harga</td>
                                            <td>Stok</td>
                                            <td>Ukuran</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;?>
                                        <?php foreach ($baju as $us): ?>
                                        <tr>
                                            <td> <?= $i; ?>.</td>
                                            <td><img src="<?= base_url('assets/images/baju/') . $us['gambar']; ?>" style="width: 100px;" class="img-thumbnail"></td>
                                            <td><?=$us['merk'];?></td>
                                            <td><?=$us['harga'];?></td>
                                            <td><?=$us['stok'];?></td>
                                            <td><?=$us['ukuran'];?></td>                 
                                            <td>
                                                <a href="<?=base_url('Baju/hapus/') . $us['id']; ?>"
                                                    class="badge badge-danger">Hapus</a>    
                                                <a href="<?=base_url('Baju/edit/') . $us['id']; ?>"
                                                    class="badge badge-warning">Edit</a>
                                                
                                            </td>
                                        </tr>
                                        <?php $i++;?>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
                   