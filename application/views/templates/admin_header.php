<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $judul ?></title>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url() ?>assets/css/styles.css" rel="stylesheet">
    <link rel="icon" href="<?php echo base_url() ?>assets/img/logo.png">
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning fixed-top" id="mainNav">
        <div class="container px-4">
            <a class="navbar-brand" href="<?php echo base_url('admin') ?>">
                <img src="<?php echo base_url() ?>assets/img/logo.png" alt="" width="80" class="d-inline-block align-text-top">
                <strong>Admin</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#pariwisata">Pariwisata</a></li>
                    <li class="nav-item"><a class="nav-link" href="#anggota">Anggota</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tiket">Tiket</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('informasi') ?>"><img src="<?php echo base_url() ?>assets/img/icon/home_icon.png" alt="" width="50" height="50"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>