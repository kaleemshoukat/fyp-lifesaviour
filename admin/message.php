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
    <title>Appointment Message</title>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/style.css?v=1.1">
	<link rel="stylesheet" type="text/css" href="vendor/sidebar.css?v=1.1">
	<link rel="icon" href="images/logo.png" type="image/gif">
</head>
<body>

<?php  
	$page='appointment';
   include('includes/header.php');
   include('includes/sidebar.php');
?> 

<div class="content" style="padding-top: 100px;">
<div class="row">
	<h1 style="color: red; margin-left: 20px;">Appointment Message</h1>
	<a href="viewappointment.php"><button class="btn btn-outline-primary" style="margin-left: 580px; margin-top: 10px;" type="submit">Back</button></a>	
</div>

<br>	
	
	<?php
		$con = mysqli_connect('localhost', 'root', '12345678', 'lifesaviour'); //connect db
		$messageId =$_GET['id'];
		$s= "SELECT * FROM appointment WHERE id='$messageId'";		//select query
		$result= mysqli_query($con, $s);		//run query


 		while( $row = mysqli_fetch_assoc($result)){
		 	$reg="SELECT * FROM registration WHERE email='".$row['email']."'";
		 	$result1= mysqli_query($con, $reg);
		 	$row1 = mysqli_fetch_assoc($result1);
	?>	 	
		<table class="table table-borderless table-dark">
			
			<tr>
				<th>Name</th>
				<?php echo "<td>".$row1['name']."</td>"; ?>
			</tr>
			<tr>	
				<th>Email</th>
				<?php echo "<td>".$row['email']."</td>"; ?>
			</tr>
			<tr>	
				<th>Number</th>
				<?php echo "<td>".$row1['num']."</td>"; ?>
			</tr>
			<tr>	
				<th>Gender</th>
				<?php echo "<td>".$row1['gender']."</td>"; ?>
			</tr>
			<tr>	
				<th>Blood Group</th>
				<?php echo "<td>".$row1['blood']."</td>"; ?>
			</tr>
			<tr>	
				<th>Hospital/Blood Bank</th>
				<?php echo "<td>".$row['hospital']."</td>"; ?>
			</tr>
			<tr>	
				<th>Timing</th>
				<?php echo "<td>".$row['timing']."</td>"; ?>
			</tr>
			<tr>	
				<th>Appointment Date</th>
				<?php echo "<td>".$row['date']."</td>"; ?>
			</tr>
			<tr>	
				<th>Message</th>
				<?php echo "<td>".$row['message']."</td>"; ?>
			</tr>	
		</table>
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