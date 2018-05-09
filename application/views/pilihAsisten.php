<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets//css/style.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/script.js'); ?>"></script>
	<title>Feedback - Laboratorium Fisika Dasar Universitas Telkom</title>
</head>
<body>
	<div class="container">
		<?php echo form_open('input-data'); ?>
		<input type="hidden" name="nama" value="<?php echo $nama; ?>">
		<input type="hidden" name="nim" value="<?php echo $nim; ?>">
		<input type="hidden" name="kelompok" value="<?php echo $kelompok; ?>">
		<input type="hidden" name="jurusan" value="<?php echo $jurusan; ?>">
		<?php
		$i=1;
		$first=true;
		$pageNumber = 1;
		$countAsisten = 1;
		?>
		<div class="halaman<?php echo $pageNumber; ?>">
			<div class="row">
			<div class="judul" style="margin: 45px;">
			<p><h4>Tulis feedback untuk asisten yang kamu inginkan!</h4></p>
			</div>
			<?php
			foreach ($asisten as $a) {
				$foto = $a['foto'];
				$kode = $a['kode']; 
			?>
			<div class="col-sm-2">
				<img src="<?php echo base_url($foto); ?>" width="150" height="150">
					<center>
						<?php
							if ($i==1 && $first=true) {
						?>
						<input type="radio" name="asisten" value="<?php echo $kode; ?>" required />
						<?php
							$first=false;
						}
						else { ?>
							<input type="radio" name="asisten" value="<?php echo $kode; ?>" />
						<?php
						}
					?>
				</center>
			</div>
			<?php
					$i++;
					$countAsisten++;
					if ($i==7) {
						?>
						</div>
						<div class="row" style="margin-top:20px;">
						<?php
						$i=1;
					}
					if ($countAsisten==13) { 
						$pageNumber++;
						?>
						</div>
						</div>
						<div class="halaman<?php echo $pageNumber; ?>">
						<div class="row" style="margin-top:20px;">
						<div class="judul" style="margin: 45px;">
						<center>
						<p><h4>Tulis feedback untuk asisten yang kamu inginkan!</h4></p>
						</center>
						</div>
					<?php
					$countAsisten=1;
					}
			?>	
			<?php
			}

			?>
			</div>
		</div>
		<div class="row">
			<center>
			<ul class="pagination">
				<li><a href="#" class="page1">1</a></li>
				<li><a href="#" class="page2">2</a></li>
				<li><a href="#" class="page3">3</a></li>
				<li><a href="#" class="page4">4</a></li>
				<li><a href="#" class="page5">5</a></li>
				<li><a href="#" class="page6">6</a></li>
				<li><a href="#" class="page7">7</a></li>
				<li><a href="#" class="page8">8</a></li>
				<li><a href="#" class="page9">9</a></li>
			</ul>
			</center>
		</div>
		<div class="row">
				<div class="col-sm-8">
					<div class="form-group" style="margin-top: 10px;">
						<h4>Feedback</h4>
						<textarea class="form-control" name="feedback" style="resize: none;" required></textarea>
					</div>
				</div>
			</div>
			<div class="row" style="padding-top: 10px; margin-bottom: 10px;">
				<center>
				<div class="col-sm-1"><input type="submit" class="btn btn-primary" name="submit" value="Kirim!" /></div>
				</center>
			</div>
			<center>
			<footer style="margin-top: 15px;"><p>Copyright &copy 2018 - Laboratorium Fisika Dasar Universitas Telkom, proudly by <a href="https:/msatrio.com" target="_blank">CAK</a>.</p></footer>
			</center>
	</div>
</body>
</html>