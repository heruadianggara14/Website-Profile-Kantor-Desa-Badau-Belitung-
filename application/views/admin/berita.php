<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Data Berita
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Berita</li>
      </ol>
    </section>

    <section class="content">
    	<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>  Tambah Data Berita</button>
        <div class="table-responsive">
            
            <table class="table table-bordered table-dark">
            <tr>
                <th>NO</th>
                <th>FOTO</th>
                <th>JUDUL</th>
                <th colspan="2">AKSI</th>
            </tr>

            <?php 

            $no = 1;
            foreach ($berita as $brt) : ?>
                <tbody>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><img src="<?php echo base_url(); ?>assets/foto_berita/<?php echo $brt->foto ?>" width="240" height="150"></td>
                        <td><?php echo $brt->judul; ?></td>
                        <td onclick="javascript: return confirm('Anda Yakin Hapus ?')"l><?php echo anchor('berita_admin/hapus/'.$brt->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                        <!-- <td><?php echo anchor('berita_admin/edit/'.$brt-> id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td> -->
                    </tr>
                </tbody>
                

            <?php endforeach; ?>

        </table>
    	
        </div>
    </section>

    <!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">INPUT DATA BERITA</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <?php echo form_open_multipart('berita_admin/tambah_aksi'); ?>

            <div class="form-group">
                <label>Foto</label>
                <input type="file" name="foto" class="form-control">
            </div>

            <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" class="form-control">
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="deskripsi" style="width:550px; height:200px;"></textarea>
            </div>

            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>

        <?php echo form_close(); ?>
        
      </div>
    </div>
  </div>
</div>

</div>
