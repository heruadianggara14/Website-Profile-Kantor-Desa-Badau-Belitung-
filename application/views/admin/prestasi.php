<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Data Prestasi
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Prestasi</li>
      </ol>
    </section>

    <section class="content">
    	<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>  Tambah Data Prestasi</button>
    	<table class="table">
    		<tr>
    			<th>NO</th>
    			<th>NAMA PESERTA</th>
                <th>NAMA KEJUARAAN</th>
                <th>TANGGAL PELAKSANAAN</th>
                <th>TEMPAT</th>
                <th>JUARA</th>  
                <th colspan="2">AKSI</th>
    		</tr>

    		<?php 

    		$no = 1;
    		foreach ($prestasi as $pts) : ?>
    			<tr>
    				<td><?php echo $no++ ?></td>
    				<td><?php echo $pts->nama_peserta; ?></td>
                    <td><?php echo $pts->kejuaraan; ?></td>
                    <td><?php echo $pts->tggl_pelaksana; ?></td>
                    <td><?php echo $pts->Tempat; ?></td>
                    <td><?php echo $pts->juara; ?></td>
                    <td onclick="javascript: return confirm('Anda Yakin Hapus ?')"l><?php echo anchor('prestasi_admin/hapus/'.$pts->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                    <td><?php echo anchor('prestasi_admin/edit/'.$pts-> id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
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
        <h4 class="modal-title" id="exampleModalLabel">INPUT DATA PRESTASI</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <?php echo form_open_multipart('prestasi_admin/tambah_aksi'); ?>

        	<div class="form-group">
        		<label>Nama Peserta</label>
        		<input type="text" name="nama_peserta" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Nama Kejuaraan</label>
        		<input type="text" name="kejuaraan" class="form-control">
        	</div>
            <div class="form-group">
        		<label>Tanggal Pelaksanaan</label>
        		<input type="date" name="tggl_pelaksana" class="form-control">
        	</div>
            <div class="form-group">
        		<label>Tempat</label>
        		<input type="text" name="Tempat" class="form-control">
        	</div>
            <div class="form-group">
        		<label>Juara</label>
        		<input type="text" name="juara" class="form-control">
        	</div>
            

        	<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        	<button type="submit" class="btn btn-primary">Simpan</button>

        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>

</div>