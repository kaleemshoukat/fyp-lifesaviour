<?php 
session_start();

// if(!isset($session['$email'])){			//without login user cannot see home page
// 	header('location:login.php');
// }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add user</title>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/style.css?v=1.1">
	<link rel="stylesheet" type="text/css" href="vendor/sidebar.css?v=1.1">
	<link rel="icon" href="images/logo.png" type="image/gif">
</head>
<body>

<?php
	$page='adduser';  
   include('includes/header.php');
   include('includes/sidebar.php');
   include('register.php'); 
?> 

<!-- Page content -->
<div class="content" style="padding-top: 100px;">
	<div class="container col-md-6">
		<h1 style="color: red;">Add User</h1>
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
			<div class="form-group">
				<label><b>Full Name</b></label>
				<input type="text" name="name" class="form-control designinput"  maxlength="25" minlength="3"
				value="<?php echo $name ?>">
				<span class="error"><?php echo $nameErr ?></span>
			</div>

			<div class="form-group">
				<label><b>Email</b></label>
				<input type="text" name="email" class="form-control designinput" maxlength="25" 
				value="<?php echo $email ?>">
				<span class="error"><?php echo $emailErr ?></span>
			</div>

			<div class="form-group">
				<label><b>Age</b></label>
				<input type="text" name="age" class="form-control designinput"  maxlength="2" value="<?php echo $age ?>">
				<span class="error"><?php echo $ageErr ?></span>
			</div>

			<div class="form-group">
				<label><b>Mobile Number</b></label>
				<input type="text" name="num" class="form-control designinput"  maxlength="11" minlength="11" 
				value="<?php echo $number ?>">
				<span class="error"><?php echo $numberErr ?></span>
			</div>

			<div class="form-group" class="form-control">
				<label><b>Choose your gender</b></label><br>
				
				<label><b>Male</b></label>
				<input type="radio" name="gender" value="M" <?php echo ($gender == 'M')?"checked":""; ?>>
				<label><b>Female</b></label>
				<input type="radio" name="gender" value="F" <?php echo ($gender == 'F')?"checked":""; ?>>
				<span class="error"><?php echo $genderErr ?></span>
			</div>

			<div class="form-group" class="form-control" >
				<label><b>Blood group</b></label>
				<select name="blood" class="designinput">
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
				<label><b>City</b></label>
				<select name="city" class="designinput">
					<option value="lahore">Lahore</option>
					<option value="karachi">Karachi</option>
					<option value="multan">Multan</option>
					<option value="rawalpindi">Rawalpindi</option>
					<option value="peshawer">Peshawer</option>
					<option value="quetta">Quetta</option>
				</select>
			</div>

			<div class="form-group">
				<label><b>Address</b></label>
				<textarea name="address" rows="4" class="form-control designinput" minlength="10"><?php echo $address ?></textarea>
				<span class="error"><?php echo $addressErr ?></span>
			</div>

			<div class="form-group">
				<label><b>Password</b></label>
				<input type="password" name="password" class="form-control designinput" minlength="8" maxlength="15"
				value="<?php echo $password ?>" id="myInput">
				<span class="error"><?php echo $passwordErr ?></span>
			</div>

			<div class="form-group">
				<input type="checkbox" class="designinput" onclick="checkboxFunction()"><b>Show Password</b>
			</div>

			<button type="submit" name="regbtn" class="btn btn-primary">Register</button>
		</form>	
	</div>
</div>

<br><br>
<?php  
   include('includes/footer.php');
?> 

<script src="vendor/blood.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>