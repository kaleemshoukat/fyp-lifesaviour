<?php 
session_start();

// if(!isset($session['$email'])){			//without login user cannot see home page
// 	header('location:login.php');
// }

$con = mysqli_connect('localhost', 'root', '12345678', 'lifesaviour');
//if (isset($_POST['regbtn'])) {
$emailErr= $email="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {	
	
	if (empty($_POST["email"])) {
		$emailErr = "*Email is required*";
	}
	else {
		$email = test_input($_POST["email"]);
		
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "*Invalid email format*"; 
		} 
	}

	if($emailErr==''){

		$s= "select * from registration where email ='$email'";	    //registration is table name in database
		$result= mysqli_query($con, $s);
		$rows= mysqli_fetch_array($result);
		if($rows){
			$s= "DELETE FROM registration WHERE email='$email'";		//select query
			$result= mysqli_query($con, $s);		//run query
			header('location:deleteuser.php');		 
		}
		else{
			$emailErr= "User don't exists in record.";
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
    <title>Delete user</title>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/style.css?v=1.1">
	<link rel="stylesheet" type="text/css" href="vendor/sidebar.css?v=1.1">
	<link rel="icon" href="images/logo.png" type="image/gif">
</head>
<body>

<?php  
	$page='deleteuser';
   include('includes/header.php');
   include('includes/sidebar.php');
?> 

<!-- Page content -->
<div class="content" style="padding-top: 100px; padding-bottom: 100px;">
	<div class="container col-md-6">
		<h1 style="color: red;">Delete User</h1><br>
		<img src="images/delete.jpg" style="margin-left: 70px;">
		<br><br>	
	 	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
			<div class="form-group">
				<label><b>Enter the Email to delete the account of user</b></label>
				<input type="text" name="email" class="form-control designinput" value="<?php echo $email; ?>">
				<span class="error"><?php echo $emailErr ?></span>
			</div>

			<button type="submit" name="regbtn" class="btn btn-danger">Delete</button>	
		</form> 
	</div> 
</div>



<?php  
   include('includes/footer.php');
?> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>