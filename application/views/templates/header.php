<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="theme-color" content="#009578"/>
    <title><?= $title; ?></title>
    <link href="<?= base_url('assets/'); ?>css/styles.css" rel="stylesheet"/>
    <link href="<?= base_url('assets/'); ?>pwa/src/style.css" rel="stylesheet"/>
    <link href="assets/pwa/manifest.json" rel="manifest"/>
    <link href="<?= base_url('assets/'); ?>pwa/img/1.png" rel="apple-touch-icon"/>
    <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/admin/images/LW.jpg'?>">
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="Home">
                <img src="<?= base_url('assets/'); ?>pengunjung/img/icon.png" style="width: 50px; height: 50px;" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="Home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#fasilitas">Fasilitas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tiket">Tiket</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="administrator">Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>