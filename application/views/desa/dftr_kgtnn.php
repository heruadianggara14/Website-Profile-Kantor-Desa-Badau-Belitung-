<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets_desa/css/bootstrap.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets_desa/css/styleindex.css">
  <!--  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> -->
  <!-- <script src="https://kit.fontawesome.com/ded791e88a.js"></script> -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets_desa/fontawesome-free/css/all.min.css">


  <style type="text/css">
    .my-custom-scrollbar {
      position: relative;
      height: 440px;

      overflow: auto;
    }

    .table-wrapper-scroll-y {
      display: block;
    }
  </style>


  <title>Home | </title>
</head>

<body id="page-top" class="bg-light">





  <div class="">
    <div class="row">
      <div class="col-xl-9" style="background-color: #72D2CE">


        <!-- ------------------------------------------------------------------------------------------------------ -->


        <!-- ------------------------------------------------------------------------------------------------------ -->
        <div style="background-color: lightgrey">
          <div class="col-lg-12 bg-dark mt-4">
            <center>
              <h2 style="color: lightgrey">Pengumuman Desa Badau</h2>
            </center>
          </div>
          <div class="table-wrapper-scroll-y my-custom-scrollbar">

            <table class="table table-bordered table-striped mb-0">
              <tr>
                <div class="row">

                  <div class="col-xl-12 container bg-dark mt-1">

                    <?php foreach ($pengumuman as $brt) { ?>
                      <th>
                        <div class="card mt-2 container" style="width: 18rem;">
                          <img class="card-img-top" src="<?php echo base_url() . 'assets/foto_berita/' . $brt->foto ?>" width="240" height="150" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $brt->judul; ?></h5>
                          </div>
                          <div class="card-body">
                            <?php echo anchor('pengumuman_home/detail/' . $brt->id, '<div class="btn btn-success btn-sm">Selengkapnya</div>') ?>
                          </div>
                        </div>
                      </th>
                    <?php } ?>
                  </div>
                </div>
              </tr>
            </table>
          </div>
        </div>

        <!-- ------------------------------------------------------------------------------------------------------ -->








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




  <!-- <div class="jumbotron">
      <div class="container">
          <h1 class="display-4">EXPLORE YOUR SELF WITH <br> <span class="font-weight-bold">YKZ INC</span></h1>
          <hr class="my-4">
          <p class="lead">tak pernah habis dunia sampai ke ujung batasnya</p>
          <a class="btn btn-primary btn-lg font-weight-bold" href="#" role="button">KUNJUNGI</a>
      </div>
    </div> -->






  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>