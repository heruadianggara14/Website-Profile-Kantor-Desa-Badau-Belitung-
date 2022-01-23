<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Data Foto
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Foto</li>
      </ol>
    </section>

    <section class="content">
    	<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>  Tambah Data Foto</button>
        <a href="<?php echo base_url('foto/tampilan'); ?>" class="btn btn-primary"><i class="fa fa-camera"></i> Tampil Foto</a>
    	<table class="table">
    		<tr>
    			<th>NO</th>
    			<th>FOTO</th>
    			<th>DESKRIPSI</th>
                <th colspan="2">AKSI</th>
    		</tr>

    		<?php 

    		$no = 1;
    		foreach ($foto as $ft) : ?>
    			<tr>
    				<td><?php echo $no++ ?></td>
    				<td><img src="<?php echo base_url(); ?>assets/foto/<?php echo $ft->foto ?>" width="240" height="150"> </td>
    				<td><?php echo $ft->deskripsi; ?></td>
                    <td onclick="javascript: return confirm('Anda Yakin Hapus ?')"l><?php echo anchor('foto/hapus/'.$ft->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
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
        <h4 class="modal-title" id="exampleModalLabel">Form Input Data Foto</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <?php echo form_open_multipart('foto/tambah_aksi'); ?>
    
            <div class="form-group">
                <label>Upload Foto</label> 
                <input type="file" name="foto" class="form-control">
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control">
            </div>

        	<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        	<button type="submit" class="btn btn-primary">Simpan</button>

        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>

</div>