<div class="content-wrapper">
	<section class="content">
		<?php foreach ($ekstra_pilihan as $ex2) { ?>

		<form action="<?php echo base_url().'ekstra_pilihan/update'; ?>" method="post">
			<div class="form-group">
				<label>Nama Ekstrakulikuler</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $ex2->id ?>">
				<input type="text" name="nama_ekstrakulikuler" class="form-control" value="<?php echo $ex2->nama_ekstrakulikuler ?>">
			</div>

			<div class="form-group">
				<label>Hari</label>
				<input type="text" name="hari" class="form-control" value="<?php echo $ex2->hari ?>">
			</div>

			<div class="form-group">
				<label>Waktu</label>
				<input type="text" name="waktu" class="form-control" value="<?php echo $ex2->waktu ?>">
			</div>

			<div class="form-group">
				<label>Tempat</label>
				<input type="text" name="tempat" class="form-control" value="<?php echo $ex2->tempat ?>">
			</div>

			<button type="reset" class="btn btn-danger">RESET</button>
			<button type="submit" class="btn btn-primary">SIMPAN</button>
		</form>

		<?php } ?>
	</section>
</div>