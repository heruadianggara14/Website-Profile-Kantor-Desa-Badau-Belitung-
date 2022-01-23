<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_sd/Font-Awesome-4.7/css/font-awesome.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_sd/css/bootstrap.css">
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_sd/css/hero-slider-style.css">
    <!-- Hero slider style (https://codyhouse.co/gem/hero-slider/) -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_sd/css/magnific-popup.css">
    <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_sd/css/templatemo-style.css">
    <script src="<?php echo base_url() ?>assets_sd/js/jquery-1.11.3.min.js"></script>

    <!--    <script>
	$(document).ready(function(){
		$('.zoom').hover(function() {
			$(this).addClass('transisi');
		}, function() {
			$(this).removeClass('transisi');
		});
	});  
	</script> -->

    <title>Denah | Kantor Desa Badau</title>
</head>

<body id="page-top" style="background-color: grey">




    <div class="">
        <div class="row">
            <div class="col-xl-9 " style="background-color: #17c0eb">
                <div class="jumbotron mt-4">
                    <div class="">
                        <!-- <center><img class="img-fluid img-thumbnail" src="img/SDMP2.jpg" width="700px" alt=""></center> -->
                        <figure class="effect-sadie">
                            <img src="<?php echo base_url() ?>assets_sd/img/denah.jpg" />
                        </figure>

                    </div>
                </div>
            </div>

            <div class="col-xl-3" style="background-color: lightgrey">
                <div class="mr-3 ml-3">
                    <?php include "application/views/kalender_view.php" ?>
                </div>
                <div class="mr-3 ml-3 mt-3">
                    <center><?php include "application/views/hit_counter.php" ?></center>
                </div>
                <div class="mr-3 ml-3 mt-3">
                    <center><?php include "application/views/kritik.php" ?></center>
                </div>
                <div class="mr-3 ml-3 mt-3">
                    <center>
                        <div class="row container mt-4 mb-4">
                            <div class="col-xl-12 container bg-light">
                                <h4>Map Kantor Desa Badau</h4>
                                <div class="embed-responsive embed-responsive-21by9 ">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1020142.5454267837!2d107.19965082454452!3d-2.835988447846653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e172495eb5b06e1%3A0x4e5b0426d2fda5e9!2sKANTOR%20DESA%20BADAU!5e0!3m2!1sid!2sid!4v1608352918164!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                </div>
                                <br>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid primary-footer bg-dark text-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12 text-md-left mb-2 mt-2">
                        <h2 class="page-title">Hubungi Kami</h2>
                        <hr>
                        <p>Kantor Desa Badau</p>
                        <dl class="row">
                            <dt class="col-lg-4 col-md-4 col-sm-12"><span class="fa fa-map-marker"></span> Alamat</dt>
                            <dd class="col-lg-8 col-md-8 col-sm-12">Badau, Kabupaten Belitung, Kepulauan Bangka Belitung 33451</dd>
                        </dl>
                    </div>
                    <div class="col-md-4 col-xs-12 text-md-left mb-2 mt-2">
                        <h2 class="page-title">Tags</h2>
                        <hr>
                        <div class="tag-content-block tag">
                            <a href="<?= site_url('daftar_kegiatan') ?>">Kegiatan</a><br>
                            <a href="<?= site_url('foto_home') ?>">Foto</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 text-md-left mb-2 mt-2">
                        <h2 class="page-title">Ikuti Kami</h2>
                        <hr>
                        <ul class="list-unstyled">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid secondary-footer bg-dark">
            <div class="container copyright">
                <div class="row pt-1 pb-1">
                    <div class="container text-center text-white">
                        Copyright &copy; 2019 Kantor Desa Badau All rights reserved. </div>

                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->



    <script src="<?php echo base_url() ?>assets_sd/js/tether.min.js"></script> <!-- Tether (http://tether.io/)  -->
    <script src="<?php echo base_url() ?>assets_sd/js/bootstrap.min.js"></script> <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
    <script src="<?php echo base_url() ?>assets_sd/js/hero-slider-main.js"></script> <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
    <script src="<?php echo base_url() ?>assets_sd/js/jquery.magnific-popup.min.js"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->

</body>

</html>