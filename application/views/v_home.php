
    <head>
        <link href="<?= base_url('assets/'); ?>pwa/manifest.json" rel="manifest">
    </head>

    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <h1 style="margin-botom: 20px;">LEMBAH WILIS</h1>
            <a class="btn btn-primary btn-xl text-uppercase" href="#gallery">lebih banyak</a>
        </div>
    </header>

    <!-- Fasilitas -->
    <section class="page-section bg-light" id="fasilitas">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Fasilitas</h2>
                <h3 class="section-subheading text-muted">Beberapa fasilitas yang tersedia di tempat wisata Lembah Wilis</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?= base_url('assets/'); ?>pengunjung/img/fasilitas/1.JPG"/>
                        <h4>Rumah Makan</h4>
                        <p class="text-muted">setelah tempat parkir</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?= base_url('assets/'); ?>pengunjung/img/fasilitas/2.JPG"/>
                        <h4>Gazebo</h4>
                        <p class="text-muted">di setiap pinggir tempat wisata</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?= base_url('assets/'); ?>pengunjung/img/fasilitas/3.JPG"/>
                        <h4>Kolam Renang</h4>
                        <p class="text-muted">setelah pintu masuk</p>
                    </div>
                    </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?= base_url('assets/'); ?>pengunjung/img/fasilitas/4.JPG"/>
                        <h4>Toilet</h4>
                        <p class="text-muted">sebelah Kolam Renang</p>
                    </div>
                    </div>

                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?= base_url('assets/'); ?>pengunjung/img/fasilitas/5.JPG"/>
                        <h4>Spot Foto</h4>
                        <p class="text-muted">di setiap sudut tempat wisata</p>
                    </div>
                    </div>

                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="<?= base_url('assets/'); ?>pengunjung/img/fasilitas/6.JPG"/>
                        <h4>Sungai</h4>
                        <p class="text-muted">setelah kolam renang</p>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- fasilitas-->

    <section class="page-section bg-light" id="tiket">
        <div class="wrap bg-light">
            <div class="wrapper">
                <div class="kiri"></div>
                <div class="kanan">
                    <h2>Jam Operasional</h2>
                    <h5>08.00 WIB - 15.00 WIB</h5>
                    <h5>Rp.10.000,00</h5>
                </div>
            </div>
        </div>
    </section>

<!-- tiket -->
    
    <!-- <div class="container page-section bg-light" id="tiket">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">TIKET</h2>
        </div>
        <div class="wrapper">
            <img class="mx-auto" src="pengunjung/img/tiket1.jpg"/>
            <img class="mx-auto" src="pengunjung/img/tiket1.jpg"/>
        </div>
    </div> -->


    <!-- Gallery Grid-->
    <section class="page-section bg-light" id="gallery">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Kumpulan foto tempat wisata</h2>
                <h3 class="section-subheading text-muted">Kare, Kab.Madiun</h3>
            </div>
            <div class="row">
                <?php	foreach ($data->result() as $row) :	?>
                <div class="col-lg-4 col-sm-6 my-3">
                    <!-- Portfolio item 6-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                            <a href="<?php echo base_url().'img_database/gallery/'.$row->galeri_gambar;?>" data-lightbox="example-2" data-title="<?php echo $row->galeri_judul;?>">
                                <img class="img-fluid" style="border-radius: 10px;" src="<?php echo base_url().'img_database/gallery/'.$row->galeri_gambar;?>" alt="image-1">
                            </a>
                        </a>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>
    
    <div class="about-section">
  <h1>About Us Page</h1>
  <p>Wisata Lembah Wilis Madiun adalah objek wisata baru yang mulai dikenal sebagi tempat liburan. Informasi tentang tempat wisata di Madiun bisa menjadi pilihan, karena suasana sangat sejuk dan sangat segar. Sehingga wisatawan bisa merasakannya adem dan santai ketika di sana.
 </p>
  <p>Lembah Wilis bisa dikatakan tujuan wisata baru. Meski begitu, sudah banyak orang yang memamerkan keindahan alam lereng Wilis. Dengan dua kolam renang dan wisata air di dalamnya. Sehingga akan disukai anak-anak.</p>
</div>



    <style>
        .kiri{
            background-image: url("./assets/pengunjung/img/ticket.jpg");
            background-size: cover;
            background-position: center;
            width: 50%;
        }
        .wrap{
            height: 50vh;
        }
        .wrapper{
            display: flex;
        }

        .wrapper .kiri,
        .wrapper .kanan{
            width:50%;
            height: 40vh;
            text-align: center;
        }
        .wrapper .kanan{
            background-color: white;
        }

        .wrapper .kanan h2{
            padding: 100px 0px 0px;
        }

        .wrapper h5{
            color: #808080;
        }

        .wrapper img{
            width:200px;
        }
        .about-section{
            padding: 50px;
            text-align: center;
            background-color: #292929;
            color: white;
        }
    </style>


