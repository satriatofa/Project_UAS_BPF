<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"><?php echo $judul; ?> </h3>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center mb-4">
                            <img class="mr-3" src="<?= base_url('assets/images/profile/') . $user['gambar']; ?>"
                                width="650" height="350" alt="">
                        </div>
                        <h4><?= $user['role']; ?></h4>
                        <h3 class="mb-0"><?= $user['nama']; ?></h3>
                        <p class="text-muted">Anggota sejak <?= date('d F Y', $user['date_created']); ?></p>
                        <ul class="card-profile__info">
                            <li><strong class="text-light mr-4"><?= $user['email']; ?></strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>