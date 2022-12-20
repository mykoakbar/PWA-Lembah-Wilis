<!-- footer -->
<footer>
        <div class="foter">
            <div class="rowo">
                <!-- <h1 style="margin: 30px 0px 50px">LOGO</h1> -->
                <div class="rowoa" style="margin-bottom: 20px;">
                    <img src="<?= base_url('assets/'); ?>pengunjung/img/icon.png" style="width: 180px; height: 180px;" alt="">
                </div>
                <div class="rowoa">
                    <ul class="menu">
                        <li><a href="Gallery">Gallery</a></li>
                        <li><a href="Tiket">Tiket</a></li>
                        <li><a href="About">About Us</a></li>
                        <li><a href="Administrator">Admin</a></li>
                    </ul>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.8356411292966!2d111.6262003143254!3d-7.700780678402871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79bb58a06ad995%3A0xd47a248c0e31e8d8!2sTaman%20Wisata%20LEMBAH%20WILIS!5e0!3m2!1sid!2sid!4v1670203258455!5m2!1sid!2sid" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="rowo-bottom">
            <p>Copyright Universitas Sebelas Maret ® 2022</p>
        </div>
    </footer>
    <style>

        .foter{
            padding: 30px;
            background-color: #222222;
            color: white;
            box-sizing: border-box;
        }

        .rowo{
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }

        .menu{
            display: flex;
            list-style: none;
            justify-content: center;
        }

        .rowoa ul li a{
            margin-right: 30px;
            text-decoration: none;
            color: white;
        }
        .rowo-bottom{
            background-color: black;
            color: #808080;
            padding-bottom: 5px;
            padding-top: 15px;
            text-align: center;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/scripts.js"></script>
    <script src="<?= base_url('assets/'); ?>pwa/src/index.js"></script>
</body>

</html>