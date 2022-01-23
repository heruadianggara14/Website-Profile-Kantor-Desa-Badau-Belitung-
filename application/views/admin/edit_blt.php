<div class="content-wrapper">
	<section class="content">
		<?php foreach ($blt as $pts) { ?>

			<form action="<?php echo base_url() . 'blt_admin/update'; ?>" method="post">
				<div class="form-group">
					<label>Nama Penerima</label>
					<input type="hidden" name="id" class="form-control" value="<?php echo $pts->id ?>">
					<input type="text" name="nama" class="form-control" value="<?php echo $pts->nama ?>">
				</div>

				<div class="form-group">
					<label>Jenis BLT</label>
					<input type="text" name="jbtn" class="form-control" value="<?php echo $pts->jbtn ?>">
				</div>

				<div class="form-group">
					<label>Hal yang perlu dibawa</label>
					<input type="text" name="hal_dbwa" class="form-control" value="<?php echo $pts->hal_dbwa ?>">
				</div>
				<div class="form-group">
					<label>Barang yang diterima</label>
					<input type="text" name="brng" class="form-control" value="<?php echo $pts->brng ?>">
				</div>
				<div class="form-group">
					<label>Jumlah</label>
					<input type="text" name="jml" class="form-control" value="<?php echo $pts->jml ?>">
				</div>
				<div class="form-group">
					<label>Tanggal</label>
					<input type="text" name="tgl" class="form-control" value="<?php echo $pts->tgl ?>">
				</div>
				<div class="form-group">
					<label>Jam</label>
					<input type="text" name="jam" class="form-control" value="<?php echo $pts->jam ?>">
				</div>

				<button type="reset" class="btn btn-danger">RESET</button>
				<button type="submit" class="btn btn-primary">SIMPAN</button>
			</form>

		<?php } ?>
	</section>
</div>