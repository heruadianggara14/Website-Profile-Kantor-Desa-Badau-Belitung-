<div class="content-wrapper">
	<section class="content">
		<?php foreach ($ekstra_wajib as $ex1) { ?>

		<form action="<?php echo base_url().'ekstra_wajib/update'; ?>" method="post">
			<div class="form-group">
				<label>Nama Ekstrakulikuler</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $ex1->id ?>">
				<input type="text" name="nama_ekstrakulikuler" class="form-control" value="<?php echo $ex1->nama_ekstrakulikuler ?>">
			</div>

			<div class="form-group">
				<label>Hari</label>
				<input type="text" name="hari" class="form-control" value="<?php echo $ex1->hari ?>">
			</div>

			<div class="form-group">
				<label>Waktu</label>
				<input type="text" name="waktu" class="form-control" value="<?php echo $ex1->waktu ?>">
			</div>

			<div class="form-group">
				<label>Tempat</label>
				<input type="text" name="tempat" class="form-control" value="<?php echo $ex1->tempat ?>">
			</div>

			<button type="reset" class="btn btn-danger">RESET</button>
			<button type="submit" class="btn btn-primary">SIMPAN</button>
		</form>

		<?php } ?>
	</section>
</div>