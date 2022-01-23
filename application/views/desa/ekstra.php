<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_desa/css/bootstrap.css">


    <!--  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> -->
    <!-- <script src="https://kit.fontawesome.com/ded791e88a.js"></script> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets_desa/fontawesome-free/css/all.min.css">

    <title>Ekstrakurikuler | SD Muh Pandes</title>
</head>

<body id="page-top" style="background-color: grey">



    <div class="">
        <div class="row">
            <div class="col-xl-9" style="background-color: #72D2CE">
                <div class="jumbotron mt-4">
                    <div class="container">
                        <!--               <div class="col-xl-10 bg-light">
                                        <p class="text-center">Alamat : Pandes I Wonokromo Pleret Bantul Yogyakarta Kode Pos 55791 Telp : 0877 3935 3365 <br>
                                         E – Mail : <a href="muhammadiyah_sdpandes@yahoo.co.id">muhammadiyah_sdpandes@yahoo.co.id</a> Web Site : <a href="sdmuhpandes.sch.id">sdmuhpandes.sch.id</a></p>
                                    </div>
 -->
                        <center>
                            <div class="col-xl-10">
                                <h2 class="text-center">
                                    EKSTRAKURIKULER <br>
                                    SD MUHAMMADIYAH PANDES
                                </h2>
                            </div>
                        </center>

                        <br>
                        <hr class="my-4"><br>
                        <!-- EKSTRA WAJIB -->
                        <h3>Ekstra Wajib</h3>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAMA EKSTRAKULIKULER</th>
                                    <th>HARI</th>
                                    <th>WAKTU</th>
                                    <th>TEMPAT</th>
                                </tr>
                            </thead>
                            <?php

                            $no = 1;
                            foreach ($ekstra_home as $ex1) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $ex1->nama_ekstrakulikuler; ?></td>
                                    <td><?php echo $ex1->hari; ?></td>
                                    <td><?php echo $ex1->waktu; ?></td>
                                    <td><?php echo $ex1->tempat; ?></td>
                                </tr>

                            <?php endforeach; ?>
                        </table>
                        <!-- ---------------------------------------------------------------------------------------------------- -->
                        <br>
                        <hr><br>
                        <!-- EKSTRA PILIHAN -->
                        <h3>Ekstra Pilihan</h3>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAMA EKSTRAKULIKULER</th>
                                    <th>HARI</th>
                                    <th>WAKTU</th>
                                    <th>TEMPAT</th>
                                </tr>
                            </thead>
                            <?php

                            $no = 1;
                            foreach ($ekstra_home as $ex2) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $ex2->nama_ekstrakulikuler; ?></td>
                                    <td><?php echo $ex2->hari; ?></td>
                                    <td><?php echo $ex2->waktu; ?></td>
                                    <td><?php echo $ex2->tempat; ?></td>
                                </tr>

                            <?php endforeach; ?>
                        </table>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>