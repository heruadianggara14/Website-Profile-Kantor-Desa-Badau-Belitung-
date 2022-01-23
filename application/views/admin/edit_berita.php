<div class="content-wrapper">
	<section class="content">
		<?php foreach ($berita as $brt) { ?>

		<form action="<?php echo base_url().'berita_admin/update'; ?>" method="post">
			<div class="form-group">
				<label>Judul</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $brt->id ?>">
				<input type="text" name="judul" class="form-control" value="<?php echo $brt->judul ?>">
			</div>
			<div class="form-group">
        		<label>Foto</label>
        		<input type="file" name="foto" class="form-control" value="<?php echo $brt->foto ?>">
        	</div>
			<div class="form-group">
        		<label>Deskripsi</label>
                <textarea name="deskripsi" value="<?php echo $brt->deskripsi ?>" style="width:550px; height:200px;"></textarea>
                <input type="submit">
        	</div>
			<button type="reset" class="btn btn-danger">RESET</button>
			<button type="submit" class="btn btn-primary">SIMPAN</button>
		</form>

		<?php } ?>
	</section>
</div>