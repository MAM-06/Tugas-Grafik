<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<h3>Login</h3>
			<hr>
			<form action="<?php echo base_url('index.php/welcome/user')?>" method="POST" >
				<div class="form-group">
					<label for="cari">Username</label>
					<input type="text" class="form-control" id="username" name="username">
				</div>
				<div class="form-group">
					<label for="cari">Password</label>
					<input type="password" class="form-control" id="password" name="password">
				</div>
				<input class="btn btn-primary" type="submit" value="Login"> 
				<input class="btn btn-primary" type="reset" value="Reset">
			</form>
		</div>
	</body>
</html>