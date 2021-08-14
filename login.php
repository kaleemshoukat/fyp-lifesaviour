<!DOCTYPE html>
<html>
<head>
	<!-- <document.characterSet> -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="vendor/style.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="icon" href="images/logo.png" type="image/gif">
</head>
<body style="background-image: url(images/donate.jpg); background-size: cover;">
<?php include ('validate.php'); ?>
<div class="container">
	<div class="login-box">	
		<div class="row">
			<div class="col-md-6 login1">
				<div class="row" style="margin-left: 110px;">
					<img src="images/logo.png" width="60" height="60">
					<h1 style="color: #990000;">Life Saviour</h1>	
				</div>
				<div  style="text-align: justify; color: #990000; margin-top: 10px;">  
		    	    <h5>Mission Statement</h5>
			     	<p>Life Saviour prevents and alleviates human suffering in the face  of emergencies by mobilizing the power of volunteers and the generosity of donors.</p>
				</div>
				<h3>Login</h3>  
				<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" value="<?php echo $email ?>" class="form-control">
						<span class="error"><?php echo $emailErr ?></span>
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

					<div class="container signin">
    				<p>Don't have an account? <a href="registration.php">Sign up</a></p>
  					</div>
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