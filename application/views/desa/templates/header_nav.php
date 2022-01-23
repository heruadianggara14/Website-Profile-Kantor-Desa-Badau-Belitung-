<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets_desa/fontawesome-free/css/all.min.css">




  <style>
    .dropdown:hover>.dropdown-menu {
      display: flex
    }
  </style>

</head>

<body>

  <nav class="navbar" style="background-color: #72D2CE">
    <div class="container" style="text-align: center;">
      <p class="text-center">
        <h1 class="font-weight-bold dark" style="font-size: 50px;">KANTOR DESA BADAU </h1>
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
        Alamat : Badau, Kabupaten Belitung, Kepulauan Bangka Belitung 33451
        Kode Pos 55791

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
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('foto_home') ?>"><i class="fa fa-camera"></i> Foto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('daftar_berita') ?>"><i class="far fa-newspaper"></i> Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('blt_home') ?>"><i class="far fa-newspaper"></i> BLT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('pengumuman_home') ?>"><i class="far fa-newspaper"></i> Pengumuman</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('prestasi_home') ?>"><i class="fas fa-trophy"></i> Prestasi</a>
          </li>


        </ul>
      </div>
    </div>
  </nav>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>