<?php
session_start(); 
$con = mysqli_connect('localhost', 'root', '12345678', 'lifesaviour'); //connect db
$s= "SELECT name,email,age,num,gender,blood,city,address,password 
FROM registration WHERE email='".$_SESSION['email']."'";//select query
$result= mysqli_query($con, $s);		//run query
//while( $row = mysqli_fetch_assoc($result)){
//echo ''  in single qutes because php don't recognize doble quotes within double quotes
$row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="vendor/style.css?v=1.8">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="icon" href="images/logo.png" type="image/gif">
</head>
<body>
 
<?php  
   include('includes/header.php');
?>

<div class="container col-md-6" style="padding-top: 100px;">
<h1>Update Your Profile</h1>
	<div class="container card bg-light ">
	 	<form action="updateaccount.php" method="post">
	 	 	<br>
			<div class="form-group">
				<label><b>Full Name</b></label>
				<input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control designinput" required>
			</div>

			<div class="form-group">
				<label><b>Age</b></label>
				<input type="text" name="age" value="<?php echo $row['age']; ?>" class="form-control designinput" required>
			</div>

			<div class="form-group">
				<label><b>Mobile Number</b></label>
				<input type="text" name="num" value="<?php echo $row['num']; ?>" class="form-control designinput" required>
			</div>
		
			<div class="form-group" class="form-control" required>
				<label><b>Choose your gender</b></label><br>
				
				<label>Male</label>
				<input type="radio" name="gender" value="M" 
				<?php if($row['gender']=='M'){echo "checked";} ?> >
				  
				<label>Female</label>
				<input type="radio" name="gender" value="F"
				<?php if($row['gender']=='F'){echo "checked";} ?> >
				
			</div>

			<div class="form-group" class="form-control" required>
				<label><b>Blood group</b></label>
				<select name="blood" class="designinput">
					<?php $blood=$row['blood'];?>

					<option <?php if($blood=='A+'){echo 'selected';}  ?> value="A+">A+</option>
					<option <?php if($blood=='A-'){echo 'selected';}  ?> value="A-">A-</option>
					<option <?php if($blood=='B+'){echo 'selected';} ?> value="B+">B+</option>
					<option <?php if($blood=='B-'){echo 'selected';} ?> value="B-">B-</option>
					<option <?php if($blood=='O+'){echo 'selected';}  ?> value="O+">O+</option>
					<option <?php if($blood=='O-'){echo 'selected';}  ?> value="O-">O-</option>
					<option <?php if($blood=='AB+'){echo 'selected';}  ?> value="AB+">AB+</option>
					<option <?php if($blood=='AB-'){echo 'selected';}  ?> value="AB-">AB-</option>
				</select>
			</div>

			<div class="form-group" class="form-control" required>
				<label><b>City</b></label>
			<select name="city" class="designinput">
				<?php $city=$row['city'];?>

				<option <?php if($city=='lahore'){echo 'selected';} ?> value="lahore">Lahore</option>
				<option <?php if($city=='karachi'){echo 'selected';} ?> value="karachi">Karachi</option>
				<option <?php if($city=='multan'){echo 'selected';} ?> value="multan">Multan</option>
			  <option <?php if($city=='rawalpindi'){echo 'selected';} ?> value="rawalpindi">Rawalpindi</option>
				<option <?php if($city=='peshawer'){echo 'selected';} ?> value="peshawer">Peshawer</option>
				<option <?php if($city=='quetta'){echo 'selected';} ?> value="quetta">Quetta</option>
			</select>
			</div>

			<div class="form-group">
				<label><b>Address</b></label>
				<textarea name="address" rows="4" class="form-control designinput"><?php echo $row['address']; ?></textarea>
			</div>

			<div class="form-group">
				<label><b>Password</b></label>
				<input type="password" name="password" value="<?php echo $row['password']; ?>" class="form-control designinput" 
				id="myInput" required>
			</div>

			<div class="form-group">
				<input type="checkbox" class="designinput" onclick="checkboxFunction()">Show Password
			</div>

			<button type="submit" name="regbtn" class="btn btn-success">Update</button><br><br>
		
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