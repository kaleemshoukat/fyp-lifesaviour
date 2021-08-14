<?php 
session_start();
$con = mysqli_connect('localhost', 'root', '12345678', 'lifesaviour');

$passwordErr= $password="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {	
	//$password= $_POST['password'];

	if (empty($_POST["password"])) {
		$passwordErr = "*Password is required*";
	}
	else {
		$password = test_input($_POST["password"]);
	}

	if($passwordErr==''){
		$email=$_SESSION['email'];
		$s= "select * from registration where email ='$email'";	    //registration is table name in database
		$result= mysqli_query($con, $s);
		$rows= mysqli_fetch_array($result);
		if($rows){
			if($rows['password']==$password){
				$s= "DELETE FROM registration WHERE password='$password'";		//select query
				$result= mysqli_query($con, $s);		//run query
				return header('location:login.php');
			}
			else {
				$passwordErr="*Incorrect password*";
			}	 
		}
	}	
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>Disable Account</title>
	<link rel="stylesheet" type="text/css" href="vendor/style.css?v=1.8">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="icon" href="images/logo.png" type="image/gif">
</head>
<body>
 
<?php  
   include('includes/header.php');
?>

<div class="container" style="padding-top: 200px; padding-bottom: 100px;">
<h1 style="margin-left: 35px;">Disable Your account</h1>
	<div class="row">
		<div class="container card bg-light col-md-6">	
		 	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
				<div class="form-group"><br>
					<p style="color: red;"><b>This action is irreversible.</b></p>
					<label><b>Enter your password to disable your account permanently.</b></label>
					<input type="password" name="password" class="form-control designinput" value="<?php echo $password; ?>"
					id="myInput">
					<span class="error"><?php echo $passwordErr ?></span>
				</div>

				<div class="form-group">
					<input type="checkbox" class="designinput" onclick="checkboxFunction()">Show Password
				</div>

				<button type="submit" name="regbtn" class="btn btn-danger">Disable</button><br><br>	
			</form>
		</div>
		<div class="col-md-5">
			<img src="images/delete2.png" style="margin-left: 150px;">
		</div>
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

