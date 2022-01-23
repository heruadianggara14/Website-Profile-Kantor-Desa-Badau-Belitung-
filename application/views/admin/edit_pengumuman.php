<div class="content-wrapper">
	<section class="content">
		<?php foreach ($pengumuman as $pts) { ?>

			<form action="<?php echo base_url() . 'pengumuman_admin/update'; ?>" method="post">
				<div class="form-group">
					<label>Judul</label>
					<input type="hidden" name="id" class="form-control" value="<?php echo $pts->id ?>">
					<input type="text" name="judul" class="form-control" value="<?php echo $pts->judul ?>">
				</div>
				<div class="form-group">
					<label>Foto</label>
					<input type="file" name="foto" class="form-control" value="<?php echo $pts->foto ?>">
				</div>
				<div class="form-group">
					<label>Deskripsi</label>
					<textarea name="deskripsi" value="<?php echo $pts->deskripsi ?>" style="width:550px; height:200px;"></textarea>
					<input type="submit">
				</div>
				<button type="reset" class="btn btn-danger">RESET</button>
				<button type="submit" class="btn btn-primary">SIMPAN</button>
			</form>

		<?php } ?>
	</section>
</div>