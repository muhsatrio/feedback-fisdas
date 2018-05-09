<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets//css/style.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/script.js'); ?>"></script>
	<title>Halaman Asisten - <?php echo $kode; ?></title>
</head>
<body>
	<center>
	<div class="container">
		<div class="row"><h3>Selamat datang, <?php echo $nama; ?>!</h3></div>
		<div class="row">
			<img src="<?php echo base_url($foto); ?>" width="150" height="150" />
		</div>
		<div class="row">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>NIM</th>
					<th>Nama</th>
					<th>Kelompok</th>
					<th>Jurusan</th>
					<th>Feedback</th>
				</tr>
				<tbody>
					<?php

					foreach ($feedback as $f) {
						?>
						<tr>
						<td><?php echo $f['nim']; ?></td>
						<td><?php echo $f['nama']; ?></td>
						<td><?php echo $f['kelompok']; ?></td>
						<td><?php echo $f['jurusan']; ?></td>
						<td><?php echo $f['feedback']; ?></td>		
						</tr>

						<?php
						//echo $f['nim']." - ".$f['nama']." - ".$f['feedback']."<br>";
					} 

					?>
				</tbody>
			</thead>
		</table>
		<a href="logout" class="btn btn-danger" role="button">Logout</a>
		</div>
	</div>
	</center>
</body>
</html>