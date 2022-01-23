<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Data Staff
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Staff</li>
      </ol>
    </section>

    <section class="content">
    	<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>  Tambah Data Staff</button>
    	<table class="table">
    		<tr>
    			<th>NO</th>
    			<th>NAMA STAFF</th>
    			<th>GENDER</th>
				<th>JABATAN</th>
                <th colspan="2">AKSI</th>
    		</tr>

    		<?php 

    		$no = 1;
    		foreach ($staf as $gr) : ?>
    			<tr>
    				<td><?php echo $no++ ?></td>
    				<td><?php echo $gr->Nama; ?></td>
    				<td><?php echo $gr->Gender; ?></td>
					<td><?php echo $gr->Jabatan; ?></td>
                    <td onclick="javascript: return confirm('Anda Yakin Hapus ?')"l><?php echo anchor('Staf/hapus/'.$gr->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                    <td><?php echo anchor('Staf/edit/'.$gr-> id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
    			</tr>

    		<?php endforeach; ?>

    	</table>
    </section>

    <!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">INPUT DATA STAFF</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <?php echo form_open_multipart('staf/tambah_aksi'); ?>

        	<div class="form-group">
        		<label>Nama Staff</label>
        		<input type="text" name="Nama" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Gender</label>
        		<select class="form-control" name="Gender">
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>
        	</div>
        	<div class="form-group">
        		<label>Jabatan</label>
        		<input type="text" name="Jabatan" class="form-control">
			</div>
			

        	<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        	<button type="submit" class="btn btn-primary">Simpan</button>

        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>

</div>