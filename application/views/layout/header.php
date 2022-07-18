<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/css/vendor.bundle.base.css">
    
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?= base_url('assets/') ?>images/favicon.png" />
  </head>

  <body>
    <div class="container-scroller">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="<?=base_url('assets/')?>index.html"><img
                        src="<?=base_url('assets/')?>images/logo.svg" alt="logo" /></a>
                <a class="sidebar-brand brand-logo-mini" href="<?=base_url('assets/')?>index.html"><img
                        src="<?=base_url('assets/')?>images/logo-mini.svg" alt="logo" /></a>
            </div>
            <ul class="nav">
                <li class="nav-item nav-category">
                    <span class="nav-link">Navigation</span>
                </li>
                <!-- Session -->
                <?php if ($user['role'] == 'Admin') { ?>
                <li class="nav-item menu-items active">
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="<?= site_url('Baju/') ?>">
                            <span class="menu-icon">
                                <i class="mdi mdi-tshirt-crew"></i>
                            </span>
                            <span class="menu-title">Baju</span>
                        </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="<?= site_url('Penjualan/') ?>">
                        <span class="menu-icon">
                            <i class="mdi mdi-store"></i>
                        </span>
                        <span class="menu-title">Penjualan</span>
                    </a>
                </li>    
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= site_url('Auth/logout') ?>" 
                        <i class="fas fa-fw fa-users"></i>
                        <span class="menu-icon">
                            <i class="mdi mdi-logout"></i>
                        </span>
                        <span>Logout</span>
                    </a>
                </li>  
                <?php } else { ?>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="<?= site_url('Profil/') ?>">
                        <span class="menu-icon">
                            <i class="mdi mdi-face"></i>
                        </span>
                        <span class="menu-title">Profile</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="<?= site_url('Profil/detail') ?>">
                        <span class="menu-icon">
                            <i class="mdi mdi-basket"></i>
                        </span>
                        <span class="menu-title">Keranjang</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="<?= site_url('Profil/Baju/') ?>">
                        <span class="menu-icon">
                            <i class="mdi mdi-store"></i>
                        </span>
                        <span class="menu-title">Produk</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= site_url('Auth/logout') ?>" 
                        <i class="fas fa-fw fa-users"></i>
                        <span class="menu-icon">
                            <i class="mdi mdi-logout"></i>
                        </span>
                        <span>Logout</span>
                    </a>
                
            
                <?php } ?>
            </ul>
        </nav>
       