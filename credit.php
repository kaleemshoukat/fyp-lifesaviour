<?php 
session_start();

// if(!isset($session['$email'])){			//without login user cannot see home page
// 	header('location:login.php');
// }

$con = mysqli_connect('localhost', 'root', '12345678', 'lifesaviour');

$email= "";
$emailErr= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//$email= $_POST['email'];
	$user_to=$_SESSION['email'];


	if (empty($_POST["email"])) {
		$emailErr = "*Email is required*";
	}
	else {
		$email = test_input($_POST["email"]);
		
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "*Invalid email format*"; 
		} 
	}


	if($emailErr==""){

		//if user enters his own email
		if($email==$user_to){
			$emailErr= "*You cannot enter your own email*";
		}
		else{

			//check either $email exists in record
			$s= "select * from registration where email ='$email'";	
			$result= mysqli_query($con, $s);
			
			$row = mysqli_fetch_assoc($result);

			//print_r($row) ; 

			$user_from=$row['email'];

			//echo $user_from; exit();


			//if $user_form has some value i.e true
			if($user_from){

				$date = date("Y-m-d");
				

				$s="INSERT INTO donation(user_from,user_to,date) VALUES 
				('$user_from','$user_to','$date')";
			    mysqli_query($con, $s);

			    $s1="UPDATE donation SET don_count=don_count+1 WHERE user_from='$user_from'";
				mysqli_query($con, $s1);
			    echo mysqli_error($con);
				header('location:credit.php');		
			}
			else{
				$emailErr= "*This email don't exists in the records*";
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
	<title>Give Credits</title>
	<link rel="stylesheet" type="text/css" href="vendor/style.css?v=1.8">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="icon" href="images/logo.png" type="image/gif">
</head>
<body>
 
<?php  
   include('includes/header.php');
?>


<div class="container" style="padding-top: 200px; padding-bottom: 100px;">
	<div class="row">
		<div class="col-md-6">
			<h1>Give credits to donor</h1>	
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
				<div class="form-group">
					<p>Whenever a donor dontes you blood make sure you give him/her credits here. This will help us to maintain his/her donation histroy and the records of top donors of our website.</p>
					<h3>Say Thanks to Donor</h3>
					<label><b>Enter the email of the donor.</b></label>
					<input type="text" name="email" class="form-control designinput" value="<?php echo $email ?>">
					<span class="error"><?php echo $emailErr ?></span>
				</div>
				<button type="submit" name="regbtn" class="btn btn-success">Give Credit</button>	
			</form>
		</div>
		<div class="col-md-6">
			<img src="images/thank1.jpg" height="300px" width="300px" style="margin-left: 100px;">
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