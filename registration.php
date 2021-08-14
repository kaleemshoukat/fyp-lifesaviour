<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="vendor/style.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="icon" href="images/logo.png" type="image/gif">
</head>
<body style="background-image: url(images/donate.jpg); background-size: cover;">
	<?php include('register.php'); ?> 
	<div class="container">
	<div class="login-box">	
		<div class="row">
			<div class="col-md-6 registration1">
				<h2>Registration</h2>
				<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
					<div class="form-group">
						<label>Full Name</label>
						<input type="text" name="name" class="form-control"  maxlength="25" minlength="3"
						value="<?php echo $name ?>">
						<span class="error"><?php echo $nameErr ?></span>
					</div>

					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" class="form-control" maxlength="25" 
						value="<?php echo $email ?>">
						<span class="error"><?php echo $emailErr ?></span>
					</div>

					<div class="form-group">
						<label>Age</label>
						<input type="text" name="age" class="form-control"  maxlength="2" value="<?php echo $age ?>">
						<span class="error"><?php echo $ageErr ?></span>
					</div>

					<div class="form-group">
						<label>Mobile Number</label>
						<input type="text" name="num" class="form-control"  maxlength="11" minlength="11" 
						value="<?php echo $number ?>">
						<span class="error"><?php echo $numberErr ?></span>
					</div>

					<div class="form-group" class="form-control">
						<label>Choose your gender</label><br>
						
						<label>Male</label>
						<input type="radio" name="gender" value="M" <?php echo ($gender == 'M')?"checked":""; ?>>
						<label>Female</label>
						<input type="radio" name="gender" value="F" <?php echo ($gender == 'F')?"checked":""; ?>>
						<span class="error"><?php echo $genderErr ?></span>
					</div>

					<div class="form-group" class="form-control" >
						<label>Blood group</label>
						<select name="blood">
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
						</select>
					</div>

					<div class="form-group" class="form-control" >
						<label>City</label>
						<select name="city">
							<option value="lahore">Lahore</option>
							<option value="karachi">Karachi</option>
							<option value="multan">Multan</option>
							<option value="rawalpindi">Rawalpindi</option>
							<option value="peshawer">Peshawer</option>
							<option value="quetta">Quetta</option>
						</select>
					</div>

					<div class="form-group">
						<label>Address</label>
						<textarea name="address" rows="3" class="form-control" minlength="10"><?php echo $address ?></textarea>
						<span class="error"><?php echo $addressErr ?></span>
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" minlength="8" maxlength="15"
						value="<?php echo $password ?>" id="myInput">
						<span class="error"><?php echo $passwordErr ?></span>
					</div>

					<div class="form-group">
						<input type="checkbox" onclick="checkboxFunction()">Show Password
					</div>

					<button type="submit" name="regbtn" class="btn btn-primary">Register</button>
					<div class="container signin">
    				<p>Already have an account? <a href="login.php">Login</a></p>
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