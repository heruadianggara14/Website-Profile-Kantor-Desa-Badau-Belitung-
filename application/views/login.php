<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets_desa/css/login.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets_desa/fontawesome-free/css/all.min.css">

  <title>Login | Admin</title>
</head>

<body>
  <div class="container">
    <h4 class="text-center">LOGIN ADMIN KANTOR DESA BADAU</h4>
    <hr>
    <div style="color: red;margin-bottom: 15px;">
      <?php
      // Cek apakah terdapat session nama message
      if ($this->session->flashdata('message')) { // Jika ada
        echo $this->session->flashdata('message'); // Tampilkan pesannya
      }
      ?>
    </div>


    <form method="post" action="<?php echo base_url('/auth/aksi_login') ?>">


      <div class="form-group">
        <label for="">Username</label>

        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-user"></i></div>
          </div>
          <input type="text" name="username" class="form-control" placeholder="Masukkan Username">
        </div>

      </div>

      <div class="form-group">
        <label for="">Password</label>

        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
          </div>
          <input type="password" name="password" class="form-control" placeholder="Masukkan password anda">
        </div>
      </div>

      <button type="submit" class="btn btn-primary">SUBMIT</button>
      <button type="reset" class="btn btn-danger">RESET</button>

    </form>

  </div>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>