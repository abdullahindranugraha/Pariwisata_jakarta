<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul; ?></title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/informasi.css">
    <link rel="icon" href="<?php echo base_url() ?>assets/img/logo.png">
    <!--CSS Untuk Banner, karena di file css tidak bisa menggunakan php untuk memanggil base url -->
    <style>
        .banner1 {
            background-image: url("<?php echo base_url() ?>assets/img/banner/monas.jpg");
        }

        .banner2 {
            background-image: url("<?php echo base_url() ?>assets/img/banner/old.jpg");
        }

        .banner3 {
            background-image: url("<?php echo base_url() ?>assets/img/banner/123.jpg");
        }

        .banner4 {
            background-image: url("<?php echo base_url() ?>assets/img/banner/jakarta-city.jpg");
        }

        .bg-wisata {
            background-image: url("<?php echo base_url() ?>assets/img/bg.png");
        }

        .banner-sejarah {
            background-image: url("<?php echo base_url() ?>assets/img/banner/m.jpg");
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url() ?>informasi"><img src="<?php echo base_url() ?>assets/img/logo.png" alt="" class="icon"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Pariwisata Jakarta</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo base_url() ?>informasi">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() ?>informasi/wisata">Wisata</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="dropdown-item" href="<?php echo base_url() ?>informasi/sejarah">Sejarah</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="<?php echo base_url() ?>informasi/kuliner">Kuliner</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() ?>informasi/e_tiket">E-Ticket</a>
                        </li>
                        <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Akun
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo base_url('user') ?>">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?php echo base_url('autentifikasi') ?>">Login/Register</a></li>
                        </ul>
                    </ul>
                    <a class="navbar-brand" href="<?php echo base_url('admin') ?>"><img src="<?php echo base_url() ?>assets/img/icon/setting_icon.jpg" alt="" width="50" height="50">admin</a>
                </div>
            </div>
        </div>
    </nav>