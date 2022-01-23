<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Data Kritik & Saran

			<small>Control panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Data Kritik & Saran</li>
		</ol>
	</section>

	<section class="content">
		<table class="table">
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>EMAIL</th>
				<th>KRITIK & SARAN</th>
				<th colspan="2">AKSI</th>
			</tr>

			<?php

			$no = 1;
			foreach ($kritik as $krt) : ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $krt->nama; ?></td>
					<td><?php echo $krt->email; ?></td>
					<td><?php echo $krt->krtksrn; ?></td>
					<td onclick="javascript: return confirm('Anda Yakin Hapus ?')" l><?php echo anchor('kritik/hapus/' . $krt->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
				</tr>

			<?php endforeach; ?>

		</table>
	</section>

	<!-- Button trigger modal -->
	<!-- Modal -->
</div>