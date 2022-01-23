<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Data Ekstrakulikuler Wajib
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Ekstrakulikuler Wajib</li>
      </ol>
    </section>

    <section class="content">
    	<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>  Tambah Data Ekstra Wajib</button>
    	<table class="table">
    		<tr>
    			<th>NO</th>
    			<th>NAMA EKSTRAKULIKULER</th>
    			<th>HARI</th>
    			<th>WAKTU</th>
                <th>TEMPAT</th>
                <th colspan="2">AKSI</th>
    		</tr>

    		<?php 

    		$no = 1;
    		foreach ($ekstra_wajib as $ex1) : ?>
    			<tr>
    				<td><?php echo $no++ ?></td>
    				<td><?php echo $ex1->nama_ekstrakulikuler; ?></td>
    				<td><?php echo $ex1->hari; ?></td>
    				<td><?php echo $ex1->waktu; ?></td>
                    <td><?php echo $ex1->tempat; ?></td>
                    <td onclick="javascript: return confirm('Anda Yakin Hapus ?')"><?php echo anchor('ekstra_wajib/hapus/'.$ex1->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                    <td><?php echo anchor('ekstra_wajib/edit/'.$ex1-> id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
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
        <h4 class="modal-title" id="exampleModalLabel">INPUT DATA EKSTRA WAJIB</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <?php echo form_open_multipart('ekstra_wajib/tambah_aksi'); ?>

        	<div class="form-group">
        		<label>Nama Ekstrakulikuler</label>
        		<input type="text" name="nama_ekstrakulikuler" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Hari</label>
        		<input type="text" name="hari" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Waktu</label>
        		<input type="text" name="waktu" class="form-control">
        	</div>
            <div class="form-group">
                <label>Tempat</label>
                <input type="text" name="tempat" class="form-control">
            </div>

        	<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        	<button type="submit" class="btn btn-primary">Simpan</button>

        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>

</div>