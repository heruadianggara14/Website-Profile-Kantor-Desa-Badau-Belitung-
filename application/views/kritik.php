<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="col-xl-12 container bg-dark">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title" style="color: white">
                      Kritik & Saran
                </h3>
            </div>
            <div class="panel-body">
             	<?php echo form_open_multipart('home/tambah_aksi'); ?>

        	<div class="form-group">
        		<label style="color: white">Nama</label>
        		<input type="text" name="nama" class="form-control">
        	</div>
        	<div class="form-group">
        		<label style="color: white">Email</label>
        		<input type="email" name="email" class="form-control">
			</div>
			<div class="form-group">
                <label style="color: white">Kritik & Saran</label>
                <textarea name="krtksrn" style="width:300px; height:200px;"></textarea>
            </div>
			

        	<button type="reset" class="btn btn-danger mb-3" >Reset</button>
        	<button type="submit" class="btn btn-primary mb-3">Submit</button>

        <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</body>
</html>