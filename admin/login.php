<!DOCTYPE html>
<html>
<head>
	<!-- <document.characterSet> -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="vendor/style.css?v=1.1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="icon" href="images/logo.png" type="image/gif">
</head>
<body style="background-image: url(images/login.png); background-size: cover;">
	<?php include ('validate.php'); ?>
	<div class="container">
	<div class="login-box">	
		<div class="row">
			<div class="col-md-6 login1">
				<div class="row" style="margin-left: 110px;">
					<img src="images/logo.png" width="60" height="60">
					<h1 style="color: #990000;">Life Saviour</h1>	
				</div>
				<!-- <form action="validate.php" method="post">
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<button type="submit" name="regbtn" class="btn btn-primary">Login</button>
				</form> -->


				<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" value="<?php echo $name ?>" class="form-control">
						<span class="error"><?php echo $nameErr ?></span>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" value="<?php echo $password ?>" class="form-control"
						id="myInput">
						<span class="error"><?php echo $passwordErr ?></span>
					</div>
					<div class="form-group">
						<input type="checkbox" onclick="checkboxFunction()">Show Password
					</div>
					<button type="submit" name="regbtn" class="btn btn-primary">Login</button>
				</form>
			</div>
		</div>

	</div>
	</div>

<script src="vendor/blood.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
</body>
</html>