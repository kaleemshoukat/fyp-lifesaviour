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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="vendor/style.css?v=1.4">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="icon" href="images/logo.png" type="image/gif">
</head>
<body>
 
<?php  
   include('includes/header.php');
?>


<div class="container " style="padding-top: 100px;">
		<h1>Profile</h1>
		<b>Your current profile details are given below.</b>	
	 	
		 	<?php 
		 		$con = mysqli_connect('localhost', 'root', '12345678', 'lifesaviour'); //connect db
				$s= "SELECT name,email,age,num,gender,blood,city,address,password 
				FROM registration WHERE email='".$_SESSION['email']."'";//select query
				$result= mysqli_query($con, $s);		//run query
				
		 		while( $row = mysqli_fetch_assoc($result)){ ?>
					
		 		<br><br>	
				<div class="container card bg-light">
					<div class="row">    
			            <div class="col-md-4">
							<img src="images/13.png" class="rounded-circle" 
								style="height: 300px; width: 300px;">
			            </div>
			            <div class="col-md-4">
			            	<br><br><br><br><br><br>
			            	<h2><?php echo $row['name']; ?></h2>
			        
			            	<a href="editprofile.php"><button class="btn btn-outline-primary" type="submit">Edit Profile</button></a>	
			        	</div>    	
		            </div>
			            <div class="col-md-10" style="padding-left: 370px;">			                
				            <table class="table table-borderless">								

								<tr>	
									<th>Email:</th>
									<?php echo "<td>".$row['email']."</td>"; ?>
								</tr>
								<tr>	
									<th>Number:</th>
									<?php echo "<td>".$row['num']."</td>"; ?>
								</tr>
								<tr>	
									<th>Gender:</th>
									<?php echo "<td>".$row['gender']."</td>"; ?>
								</tr>
								<tr>	
									<th>Blood Group:</th>
									<?php echo "<td>".$row['blood']."</td>"; ?>
								</tr>
								<tr>	
									<th>City:</th>
									<?php echo "<td>".$row['city']."</td>"; ?>
								</tr>
								<tr>	
									<th>Address:</th>
									<?php echo "<td>".$row['address']."</td>"; ?>
								</tr>
							</table>
			            </div><br><br>
			        
			    </div>
			<?php  		
				}
		 	?>
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





<!-- 
<div class="container " style="padding-top: 100px;">
		<h1>Profile</h1>
		<b>Your current profile details are given below.</b>	
	 	
		 	<?php 
		 		$con = mysqli_connect('localhost', 'root', '12345678', 'lifesaviour'); //connect db
				$s= "SELECT name,email,age,num,gender,blood,city,address,password 
				FROM registration WHERE email='".$_SESSION['email']."'";//select query
				$result= mysqli_query($con, $s);		//run query
				
		 		while( $row = mysqli_fetch_assoc($result)){ ?>
					
		 		<br><br>	
				<div class="container card bg-light">
					<div class="row">    
			            <div class="col-md-4">
							<img src="images/13.png" class="rounded-circle" style="height: 300px; width: 300px;">
			            </div>
			            <div class="col-md-4">
			            	<br><br><br><br><br><br>
			            	<h2><?php echo $row['name']; ?></h2>
			        	</div>    	
		            </div>
			            <div class="col-md-8" style="padding-left: 370px;">			                
				            <h6>Email: <?php echo $row['email']; ?></h6>
				            <h6>Age: <?php echo $row['age']; ?></h6>
				            <h6>Mobile Number: <?php echo $row['num']; ?></h6>
				            <h6>Gender: <?php echo $row['gender']; ?></h6>
				            <h6>Blood Group: <?php echo $row['blood']; ?></h6>
				            <h6>City: <?php echo $row['city']; ?></h6>
				            <h6>Address: <?php echo $row['address']; ?></h6>
			            </div><br><br>
			        
			    </div>
			<?php  		
				}
		 	?>
</div>
 -->