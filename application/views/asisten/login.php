<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets//css/style.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/script.js'); ?>"></script>
	<title>Login Asisten</title>
</head>
<body>
	<div class="container">
		<?php echo form_open('prosesLogin'); ?>
		<div class="header">
			<h2>Login</h2>
		</div>
		<div class="row" style="margin-bottom: 10px;">
				<div class="col-sm-1">User: </div><div class="col-sm-3"><input type="text" name="user" class="form-control" required/></div>
			</div>
			<div class="row" style="margin-bottom:10px;">
				<div class="col-sm-1">Password: </div>
				<div class="col-sm-3"><input type="password" name="password" class="form-control" required /></div>
			</div>
			<div class="row" style="margin-left: 20px">
				<input class="btn btn-primary" type="submit" value="Login" />
			</div>
	</div>
</body>
</html>