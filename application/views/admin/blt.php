<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Data BLT
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= site_url('admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data BLT</li>
    </ol>
  </section>

  <section class="content">
    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data BLT</button>
    <table class="table">
      <tr>
        <th>NO</th>
        <th>NAMA PENERIMA</th>
        <th>JENIS BLT</th>
        <th>HAL YANG PERLU DIBAWA</th>
        <th>BARANG YANG DITERIMA</th>
        <th>JUMLAH</th>
        <th>TANGGAL</th>
        <th>JAM</th>
        <th colspan="2">AKSI</th>
      </tr>

      <?php

      $no = 1;
      foreach ($blt as $pts) : ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $pts->nama; ?></td>
          <td><?php echo $pts->jbtn; ?></td>
          <td><?php echo $pts->hal_dbwa; ?></td>
          <td><?php echo $pts->brng; ?></td>
          <td><?php echo $pts->jml; ?></td>
          <td><?php echo $pts->tgl; ?></td>
          <td><?php echo $pts->jam; ?></td>
          <td onclick="javascript: return confirm('Anda Yakin Hapus ?')" l><?php echo anchor('blt_admin/hapus/' . $pts->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
          <td><?php echo anchor('blt_admin/edit/' . $pts->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
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
          <h4 class="modal-title" id="exampleModalLabel">INPUT DATA PENERIMA BLT</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <?php echo form_open_multipart('blt_admin/tambah_aksi'); ?>

          <div class="form-group">
            <label>Nama Penerima</label>
            <input type="text" name="nama" class="form-control">
          </div>
          <div class="form-group">
            <label>Jenis BLT</label>
            <input type="text" name="jbtn" class="form-control">
          </div>
          <div class="form-group">
            <label>Hal yang perlu dibawa</label>
            <input type="text" name="hal_dbwa" class="form-control">
          </div>
          <div class="form-group">
            <label>Barang yang diterima</label>
            <input type="text" name="brng" class="form-control">
          </div>
          <div class="form-group">
            <label>Jumlah</label>
            <input type="text" name="jml" class="form-control">
          </div>
          <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tgl" class="form-control">
          </div>
          <div class="form-group">
            <label>Jam</label>
            <input type="text" name="jam" class="form-control">
          </div>


          <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>

          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>

</div>