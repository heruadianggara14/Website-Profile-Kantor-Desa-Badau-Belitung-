<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Tampil Foto
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tampil Foto</li>
      </ol>
    </section>

    <section class="content">
    	<a href="<?php echo base_url('foto/index'); ?>" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Kembali</a><hr>

       <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <?php foreach($foto as $ft) { ?>
                        <img src="<?php echo base_url().'assets/foto/'.$ft->foto ?>" width="200px">
                    <?php } ?>
                 </div>
            </div>
       </div>

    		

    </section>
</div>