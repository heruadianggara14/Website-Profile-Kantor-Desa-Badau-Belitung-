<div class="content-wrapper">
	<section class="content">
		<?php foreach ($prestasi as $pts) { ?>

		<form action="<?php echo base_url().'prestasi_admin/update'; ?>" method="post">
			<div class="form-group">
				<label>Nama Peserta</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $pts->id ?>">
				<input type="text" name="nama_peserta" class="form-control" value="<?php echo $pts->nama_peserta ?>">
			</div>

			<div class="form-group">
				<label>Nama Kejuaraan</label>
				<input type="text" name="kejuaraan" class="form-control" value="<?php echo $pts->kejuaraan ?>">
			</div>

            <div class="form-group">
				<label>Tanggal Pelaksanaan</label>
				<input type="text" name="tggl_pelaksana" class="form-control" value="<?php echo $pts->tggl_pelaksana ?>">
			</div>

            <div class="form-group">
				<label>Tempat</label>
				<input type="text" name="Tempat" class="form-control" value="<?php echo $pts->Tempat ?>">
			</div>

            <div class="form-group">
				<label>Juara</label>
				<input type="text" name="juara" class="form-control" value="<?php echo $pts->juara ?>">
			</div>
            
			<button type="reset" class="btn btn-danger">RESET</button>
			<button type="submit" class="btn btn-primary">SIMPAN</button>
		</form>

		<?php } ?>
	</section>
</div>