<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets//css/style.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/js/jquery.js'); ?>">
	<title>Feedback - Laboratorium Fisika Dasar Universitas Telkom</title>
</head>
<body>
	<div class="container">
		<div class="header geserBawah">
		<h1>Feedback Asisten Laboratorium Fisika Dasar</h1>
		</div>
		<div class="bodyForm">
			<h4>Isi identitas kamu dulu, ya!</h4>
			<?php echo form_open('feedback'); ?>
			<!-- <h4>Isi Identitas Kamu dulu, ya!</h4> -->
			<div class="row geserBawah" style="margin-bottom: 10px;">
				<div class="col-sm-1" style="padding-top: 3px;">Nama*: </div>
				<div class="col-sm-3"><input type="text" name="nama" class="form-control" required /></div>
			</div>
			<div class="row" style="margin-bottom: 10px;">
				<div class="col-sm-1" style="padding-top: 3px;">NIM*: </div>
				<div class="col-sm-3"><input type="text" name="nim" class="form-control" required /></div>
			</div>
			<div class="row" style="margin-bottom: 10px;">
				<div class="col-sm-1" style="padding-top: 3px;">Kelompok*: </div>
				<div class="col-sm-3"><input type="text" name="kelompok" class="form-control" required /></div>
			</div>
			<div class="row" style="margin-bottom: 10px;">
				<div class="col-sm-1" style="padding-top: 3px;">Jurusan: </div>
				<div class="col-sm-3">
					<select class="form-control" name="jurusan">
						<option>
						S1 Teknik Telekomunikasi
						</option>
						<option>
						S1 Teknik Elektro
						</option>
						<option>
						S1 Teknik Fisika
						</option>
						<option>
						S1 Sistem Komputer
						</option>
					</select>
					<!-- <input type="text" name="jurusan" class="form-control" /> -->
				</div>
			</div>
			<div class="row" style="padding-top: 10px;">
				<div class="col-sm-1"><input class="btn btn-primary" type="submit" name="submit" value="Next" /></div>
			</div>
		</div>
		<footer style="margin-top: 15px;"><p>Copyright &copy 2018 - Laboratorium Fisika Dasar Universitas Telkom, proudly by <a href="https:/msatrio.com" target="_blank">CAK</a>.</p></footer>
	</div>
</body>
</html>