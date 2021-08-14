<?php 
session_start();

// if(!isset($session['$email'])){			//without login user cannot see home page
// 	header('location:login.php');
// }
$con = mysqli_connect('localhost', 'root', '12345678', 'lifesaviour');

$hospital= $email="";
$hospitalErr= $emailErr="";

//if (isset($_POST['regbtn'])) {
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (empty($_POST["hospital"])) {
		$hospitalErr = "*Hospital name is required*";
	}
	else {
		$hospital = test_input($_POST["hospital"]);
	}

	if (empty($_POST["email"])) {
		$emailErr = "*Email is required*";
	}
	else {
		$email = test_input($_POST["email"]);
		
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "*Invalid email format*"; 
		} 
	}

	if($hospitalErr=="" && $emailErr==""){
		//check either $email exists in record
		$s= "select * from registration where email ='$email'";	
		$result= mysqli_query($con, $s);
		$row = mysqli_fetch_assoc($result);
		$user_from=$row['email'];

		if($user_from){
			$date = date("Y-m-d");
			
			$s="INSERT INTO admin_don_count(email,hospital,date) VALUES 
			('$email','$hospital','$date')";
		    mysqli_query($con, $s);

		    $s="UPDATE admin_don_count SET admin_count=admin_count+1 WHERE email='$email'";
			mysqli_query($con, $s);

			header('location:userdonation.php');		
		}
		else{
			$emailErr= "*This email don't exists in the records*";
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
    <title>User Donation</title>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/style.css?v=1.1">
	<link rel="stylesheet" type="text/css" href="vendor/sidebar.css?v=1.1">
	<link rel="icon" href="images/logo.png" type="image/gif">
</head>
<body>

<?php
	$page='userdonation';  
   include('includes/header.php');
   include('includes/sidebar.php');
?> 


<!-- Page content -->
<div class="content" style="padding-top: 100px; padding-bottom: 50px;">
	<div class="row">
		<div class="col-md-6">
			<h1 style="color: red;">Give credits to donor</h1>	
		 	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
				<div class="form-group">
					<p>Enter the email of doner and name of Hospital/blood bank in which doner has donated blood.
					</p>
					<label><b>Email</b></label>
					<input type="text" name="email" class="form-control designinput" value="<?php echo $email ?>">
					<span class="error"><?php echo $emailErr ?></span>
				</div>

				<div class="form-group">
					<label><b>Hospital/blood bank</b></label>
					<input type="text" name="hospital" class="form-control designinput" value="<?php echo $hospital ?>"
					minlength="10">
					<span class="error"><?php echo $hospitalErr ?></span>
				</div>

				<button type="submit" name="regbtn" class="btn btn-success">Give Credit</button>	
			</form>	
		</div>	
		<div class="col-md-6">
			<img src="images/thanks.jpg" width="300px" height="300px" style="margin-left: 100px;">
		</div>
	</div>	 	
</div>



<br><br>
<?php  
   include('includes/footer.php');
?> 

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>