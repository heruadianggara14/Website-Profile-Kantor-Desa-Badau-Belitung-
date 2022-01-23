<div class="content-wrapper">
	<section class="content">
		 <?php require_once('tinymce.php') ?>
        <?php echo validation_errors(); ?>
        <form name="form1" method="post" action="<?php echo base_url() ?>berita_admin/tambah_aksi" class="myform">
        	<p>
        		<label for="foto">Foto</label>
        		<input type="file" name="foto" >
        	</p>
            <p>
                <label for="judul">Judul berita</label>
                <input name="judul" type="text" id="judul" size="70">
            </p>
            <p>
                <label for="isi">Isi berita</label>
                <textarea name="isi" id="isi" cols="45" rows="5"></textarea>
            </p>
            <p>
                <input type="submit" name="submit" id="submit" value="Submit">
                <input type="reset" name="submit2" id="submit2" value="Reset">
            </p>
        </form>
        <p>&nbsp;</p>
    </form></section>