<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Foto | Kantor Desa Badau</title>
    <!--
Fluid Gallery Template
http://www.templatemo.com/tm-500-fluid-gallery
-->
    <!-- load stylesheets -->

    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_desa/Font-Awesome-4.7/css/font-awesome.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_desa/css/bootstrap.css">
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_desa/css/hero-slider-style.css">
    <!-- Hero slider style (https://codyhouse.co/gem/hero-slider/) -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_desa/css/magnific-popup.css">
    <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_desa/css/templatemo-style.css">
    <!-- 
    <style>
    .dropdown:hover>.dropdown-menu {
      display: grid;
    }
  </style>    -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->

    <!-- These two JS are loaded at the top for gray scale including the loader. -->

    <script src="<?php echo base_url() ?>assets_desa/js/jquery-1.11.3.min.js"></script>
    <!-- jQuery (https://jquery.com/download/) -->

    <script>
        var tm_gray_site = false;

        if (tm_gray_site) {
            $('html').addClass('gray');
        } else {
            $('html').removeClass('gray');
        }
    </script>

    <style>
        .dropdown:hover>.dropdown-menu {
            display: flex
        }
    </style>
</head>

<body>



    <nav class="navbar" style="background-color: #72D2CE">
        <div class="container">
            <p class="text-center">
                <h1 class="font-weight-bold" style="font-size: 50px">
                    <p class="color" style="color: black">KANTOR DESA BADAU</p>
                </h1>
            </p>

        </div>
        <!--        <div class="ml-auto mt-0">
                <p class="text-center white ml-5 font-weight-bold">Alamat : Pandes I Wonokromo Pleret Bantul Yogyakarta Kode Pos 55791 Telp : 0877 3935 3365 <br>
                 E – Mail : <a href="muhammadiyah_sdpandes@yahoo.co.id">muhammadiyah_sdpandes@yahoo.co.id</a> Web Site : <a href="sdmuhpandes.sch.id">sdmuhpandes.sch.id</a></p>
            </div> -->
    </nav>


    <nav class="navbar" style="background-color: #72D2CE">
        <div class="container">

            <p class="text-center container">
                Alamat : Badau, Kabupaten Belitung, Kepulauan Bangka Belitung 33451 Kode Pos 55791
                <p>
                </p>

        </div>
        <!--        <div class="ml-auto mt-0">
                <p class="text-center white ml-5 font-weight-bold">Alamat : Pandes I Wonokromo Pleret Bantul Yogyakarta Kode Pos 55791 Telp : 0877 3935 3365 <br>
                 E – Mail : <a href="muhammadiyah_sdpandes@yahoo.co.id">muhammadiyah_sdpandes@yahoo.co.id</a> Web Site : <a href="sdmuhpandes.sch.id">sdmuhpandes.sch.id</a></p>
            </div> -->
    </nav>





    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto font-weight-bold" style="font-size: 15px; ">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('home') ?>"><i class="fa fa-home "></i> Home </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-users"></i>
                            Profil
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="font-size: 15px">
                            <a class="dropdown-item" href="<?= site_url('home/visi_misi') ?>"><i class="fa fa-book"></i> VISI & MISI</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= site_url('home/struktur_organisasi') ?>"><i class="fa fa-users"></i> Struktur Organisasi</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= site_url('staf_home') ?>"><i class="fa fa-list"></i> Daftar Staff</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= site_url('home/denah') ?>"><i class="fa fa-list"></i> Denah Desa</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('foto_home') ?>"><i class="fa fa-camera"></i> Foto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('daftar_berita') ?>"><i class="fa fa-users"></i> Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('blt_home') ?>"><i class="fa fa-users"></i> BLT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('pengumuman_home') ?>"><i class="fa fa-users"></i> Pengumuman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('prestasi_home') ?>"><i class="fa fa-users"></i> Prestasi</a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>



    <!-- Content -->

    <div class="col-lg-12 container mt-5">
        <ul class="">

            <!-- Page 1 Gallery One -->
            <li class="selected">

                <div class="cd-full-width">
                    <div class="container-fluid js-tm-page-content" data-page-type="gallery">
                        <div class="tm-img-gallery-container">
                            <div class="tm-img-gallery gallery-one">
                                <?php foreach ($foto as $ft) { ?>

                                    <div class="grid-item">
                                        <figure class="effect-sadie">


                                            <img src="<?php echo base_url() . 'assets/foto/' . $ft->foto ?>" style="width: 400px; height: 300px">

                                            <figcaption>
                                                <p class="tm-figure-description"><?php echo $ft->deskripsi; ?></p>
                                                <a href="<?php echo base_url() . 'assets/foto/' . $ft->foto ?>">View more</a>


                                            </figcaption>
                                        </figure>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

            </li>



        </ul>
    </div>



    <!-- .cd-hero-slider -->

    <!--    <div class="col-lg-12">
                
            </div> -->

    <footer>
        <div class="container-fluid primary-footer bg-dark text-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12 text-md-left mb-2 mt-2">
                        <h2 class="page-title">Contact</h2>
                        <hr>
                        <p>Kantor Desa Badau</p>
                        <dl class="row">
                            <dt class="col-lg-4 col-md-4 col-sm-12"><span class="fa fa-map-marker"></span> Alamat</dt>
                            <dd class="col-lg-8 col-md-8 col-sm-12">Badau, Kabupaten Belitung, Kepulauan Bangka Belitung 33451</dd>
                    </div>
                    <div class="col-md-4 col-xs-12 text-md-left mb-2 mt-2">
                        <h2 class="page-title">Tags</h2>
                        <hr>
                        <div class="tag-content-block tag">
                            <a href="<?= site_url('daftar_berita') ?>">Berita</a><br>
                            <a href="<?= site_url('daftar_pengumuman') ?>">Pengumuman</a><br>
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
                        Copyright © 2019 Kantor Desa Badau All rights reserved. </div>

                </div>
            </div>
        </div>
    </footer>



    <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
    <div id="loader-wrapper">

        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>

    <!-- load JS files -->

    <script src="<?php echo base_url() ?>assets_desa/js/tether.min.js"></script> <!-- Tether (http://tether.io/)  -->
    <script src="<?php echo base_url() ?>assets_desa/js/bootstrap.min.js"></script> <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
    <script src="<?php echo base_url() ?>assets_desa/js/hero-slider-main.js"></script> <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
    <script src="<?php echo base_url() ?>assets_desa/js/jquery.magnific-popup.min.js"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->

    <script>
        function adjustHeightOfPage(pageNo) {

            var pageContentHeight = 0;

            var pageType = $('div[data-page-no="' + pageNo + '"]').data("page-type");

            if (pageType != undefined && pageType == "gallery") {
                pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .tm-img-gallery-container").height();
            } else {
                pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .js-tm-page-content").height() + 20;
            }

            // Get the page height
            var totalPageHeight = $('.cd-slider-nav').height() +
                pageContentHeight +
                $('.tm-footer').outerHeight();

            // Adjust layout based on page height and window height
            if (totalPageHeight > $(window).height()) {
                $('.cd-hero-slider').addClass('small-screen');
                $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", totalPageHeight + "px");
            } else {
                $('.cd-hero-slider').removeClass('small-screen');
                $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", "100%");
            }
        }

        /*
            Everything is loaded including images.
        */
        $(window).load(function() {

            adjustHeightOfPage(1); // Adjust page height

            /* Gallery One pop up
            -----------------------------------------*/
            $('.gallery-one').magnificPopup({
                delegate: 'a', // child items selector, by clicking on it popup will open
                type: 'image',
                gallery: {
                    enabled: true
                }
            });

            /* Gallery Two pop up
                -----------------------------------------*/
            $('.gallery-two').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                }
            });

            /* Gallery Three pop up
            -----------------------------------------*/
            $('.gallery-three').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                }
            });

            /* Collapse menu after click 
            -----------------------------------------*/
            $('#tmNavbar a').click(function() {
                $('#tmNavbar').collapse('hide');

                adjustHeightOfPage($(this).data("no")); // Adjust page height       
            });

            /* Browser resized 
            -----------------------------------------*/
            $(window).resize(function() {
                var currentPageNo = $(".cd-hero-slider li.selected .js-tm-page-content").data("page-no");

                // wait 3 seconds
                setTimeout(function() {
                    adjustHeightOfPage(currentPageNo);
                }, 1000);

            });

            // Remove preloader (https://ihatetomatoes.net/create-custom-preloading-screen/)
            $('body').addClass('loaded');

            // Write current year in copyright text.
            $(".tm-copyright-year").text(new Date().getFullYear());

        });

        /* Google map
        ------------------------------------------------*/
        var map = '';
        var center;

        function initialize() {
            var mapOptions = {
                zoom: 13,
                center: new google.maps.LatLng(37.779724, -122.452152),
                scrollwheel: false
            };

            map = new google.maps.Map(document.getElementById('google-map'), mapOptions);

            google.maps.event.addDomListener(map, 'idle', function() {
                calculateCenter();
            });

            google.maps.event.addDomListener(window, 'resize', function() {
                map.setCenter(center);
            });
        }

        function calculateCenter() {
            center = map.getCenter();
        }

        function loadGoogleMap() {
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
            document.body.appendChild(script);
        }

        // DOM is ready
        $(function() {
            loadGoogleMap(); // Google Map
        });
    </script>

</body>

</html>