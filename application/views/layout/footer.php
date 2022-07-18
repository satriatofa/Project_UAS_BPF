</div>
    <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="../../index.html">
                <img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
        </div>

        <!-- Headbar -->
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown">
                    <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                        <div class="navbar-profile">
                            <img class="img-xs rounded-circle" 
                            src="<?= base_url('assets/images/profile/') . $user['gambar'] ?>">
                            <p class="mb-0 d-none d-sm-block navbar-profile-name">
                                <?= $user['role'] ?></p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        
    </nav>
    <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <a class="btn btn-primary" href="<?= base_url('Auth/logout'); ?>">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="<?=base_url('assets/')?>vendors/js/vendor.bundle.base.js"></script>
<script src="<?=base_url('assets/')?>js/off-canvas.js"></script>
<script src="<?=base_url('assets/')?>js/hoverable-collapse.js"></script>
<script src="<?=base_url('assets/')?>js/misc.js"></script>
<script src="<?=base_url('assets/')?>js/settings.js"></script>
<script src="<?=base_url('assets/')?>js/todolist.js"></script>

<script>
        $('.custom-file-input').on('change', function(){
            let fileName = $($this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        })
        $(document).ready(function(){
            $("#jumlah").on('keydown keyup change blur', function() {
                var harga = $("#harga").val();
                var jumlah = $("#jumlah").val();
                var total = parseInt(harga) * parseInt(jumlah);
                $("#total").val(total);
                if (paseInt($('input[name="stok"]').val()) <= parseInt(jumlah)) {
                    alert('stok tidak tersedia! stok tersedia! : ' + parseInt($('input[name="stok"]').val()))
                    reset()
                }
            });
            function reset() {
                $('input[name="jumlah"]').val('')
                $('input[name="total"]').val('')
            }
        })
    </script>
<!-- endinject -->
<!-- Custom js for this page -->
<!-- End custom js for this page -->
</body>
</html>