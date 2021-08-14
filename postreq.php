<?php 
session_start();
// if(!isset($session['$email'])){			//without login user cannot see home page
// 	header('location:login.php');
// }
$con = mysqli_connect('localhost', 'root', '12345678', 'lifesaviour');
$request= $requestErr= $requestSuccess="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {	

	if (empty($_POST["requestinput"])) {
		$requestErr = "*Request is required*";
	}
	else {
		$request = test_input($_POST["requestinput"]);
	}

	if($requestErr==""){
		$email=$_SESSION['email'];

		//to get number of current user
		$s="SELECT * FROM registration WHERE email='$email'";
		$result=mysqli_query($con, $s);
		while( $row = mysqli_fetch_assoc($result)){
	    	$user = $row;
		}
		$number = $user['num'];
		$name = $user['name'];
		
		//insert into db
		$requestpost="INSERT INTO blood_request(name,email,num,request) VALUES 
						('$name','$email','$number','$request')";
		//echo $requestpost; exit();

		if(mysqli_query($con, $requestpost)){
			$requestSuccess= "Request posted successfully.";
		}
		else{
			$requestErr= "Post failed.";
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
	<title>Post Request</title>
	<link rel="stylesheet" type="text/css" href="vendor/style.css?v=1.8">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="icon" href="images/logo.png" type="image/gif">
	<style type="text/css">
		tr:nth-child(odd) {
			background-color: #b8b894;
		}
	</style>
</head>
<body>
 
<?php  
   include('includes/header.php');
?>

<!-- Page content -->
<div class="container" style="padding-top: 100px;">
	<h1>Post a Request</h1>	
	<div class="row">
		<div class="col-md-6">	
			
		 	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
				<div class="form-group">
					<p>Your boold request will be posted in news alert with your name, request, email and
					 contact number.Whenever a donor dontes you blood make sure you give him/her credits
					 <a href="credit.php">here</a>.</p>
					<label><b>Here you can write yor blood request.</b></label>
					<!-- <input type="text" name="news" class="form-control" required> -->
					<textarea name="requestinput" rows="4" class="form-control designinput" minlength="25"><?php $request; ?></textarea>
					<span class="error"><?php echo $requestErr; ?></span>
					<span style="color: green;"><?php echo $requestSuccess; ?></span>
				</div>

				<button type="submit" name="regbtn" class="btn btn-primary">Post</button>	
			</form>
		</div>
		<div class="col-md-6">
			<img src="images/postreq1.jpg" height="300px" width="300px" style="margin-left: 150px;">
		</div>
	</div> 	
</div>



<!-- Page content -->
<div class="content" style="padding-top: 50px;">
	<div class="container">
		<div class="col-md-11">
		<h1>Delete Your Post</h1>
		<b>Here you can delete the old blood requests when you get the blood.</b>	
	 	<table class="table">
			<thead>
				<tr style="background-color: white !important;">
					<th>Blood Request Posts</th>
					<th>Delete</th>
				</tr>
			</thead>
		 	<?php 
		 		$email=$_SESSION['email'];
		 		$con = mysqli_connect('localhost', 'root', '12345678', 'lifesaviour'); //connect db
				$s= "SELECT * FROM blood_request WHERE email='$email'";		//select query
				$result= mysqli_query($con, $s);		//run query
				
		 		while( $row = mysqli_fetch_array($result)){
	 				$requestId = $row['id'];
					echo "<tr>";
					echo "<td>".$row['request']."</td>";
					echo "<td><a href='deletereq.php?id=".$requestId."' onClick=\"javascript:return confirm('Are you sure you want to delete this?');\" style=\"color: red;  text-decoration: none;\">Delete</a></td>";
					echo "</tr>";	
	 			}
		 	?>
		</table>
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