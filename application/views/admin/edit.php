<div class="content-wrapper">
	<section class="content">
		<?php foreach ($Staf as $gr) { ?>

		<form action="<?php echo base_url().'Staf/update'; ?>" method="post">
			<div class="form-group">
				<label>Nama Staff</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $gr->id ?>">
				<input type="text" name="Nama" class="form-control" value="<?php echo $gr->Nama ?>">
			</div>

			<div class="form-group">
				<label>Gender</label>
				<select class="form-control" name="Gender" value="<?php echo $gr->Gender ?>">
				    <option>Laki-laki</option>
				    <option>Perempuan</option>
				</select>
			</div>

			<div class="form-group">
				<label>Jabatan</label>
				<input type="text" name="Jabatan" class="form-control" value="<?php echo $gr->Jabatan ?>">
			</div>

			<button type="reset" class="btn btn-danger">RESET</button>
			<button type="submit" class="btn btn-primary">SIMPAN</button>
		</form>

		<?php } ?>
	</section>
</div>