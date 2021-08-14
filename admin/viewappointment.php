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
    <title>view Appointment</title>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/style.css?v=1.1">
	<link rel="stylesheet" type="text/css" href="vendor/sidebar.css?v=1.1">
	<link rel="icon" href="images/logo.png" type="image/gif">
	<style type="text/css">
		tr:nth-child(odd) {
			background-color: #b8b894;
		}
	</style>
</head>
<body>

<?php  
	$page='appointment';
   include('includes/header.php');
   include('includes/sidebar.php');
?> 


<div class="content" style="padding-top: 100px; padding-bottom: 100px;">
<h1 style="color: red;">Appointments requested by users</h1><br>	
	<div class="row justify-content-center">
		<table class="table">
			<thead>
				<tr style="background-color: white !important;">
					<th>Users who requested for appointment</th>
					<th>Appointment Message</th>
					<th>Delete Message</th>
				</tr>
			</thead>
			<?php
				$con = mysqli_connect('localhost', 'root', '12345678', 'lifesaviour'); //connect db
				$s= "select * from appointment";		//select query
				$result= mysqli_query($con, $s);		//run query


				 while( $row = mysqli_fetch_assoc($result)){
				 	$messageId = $row['id'];
					echo "<tr>";
					echo "<td>".$row['email']."</td>";
					echo "<td><a href='message.php?id=".$messageId."'  style=\"text-decoration: none; color: #000099;\">Message</a></td>";
					echo "<td><a href='deleteMessage.php?id=".$messageId."' onClick=\"javascript:return confirm('Are you sure you want to delete this?');\" style=\"color: red;  text-decoration: none;\">Delete</a></td>";
					echo "</tr>";
				}
			?>	
		</table>
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













<!-- 


<div class="content" style="padding-top: 100px;">
<h1 style="color: red;">Appointments requested by users</h1><br>	
	<div class="row justify-content-center">
		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Number</th>
					<th>Gender</th>
					<th>Blood Group</th>
					<th>Hospital/Blood Bank</th>
					<th>Timing</th>
					<th>Date</th>
					<th>Message</th>
				</tr>
			</thead>
			<?php
				$con = mysqli_connect('localhost', 'root', '12345678', 'lifesaviour'); //connect db
				$s= "select * from appointment";		//select query
				$result= mysqli_query($con, $s);		//run query


				 while( $row = mysqli_fetch_assoc($result)){
				 	$reg="SELECT * FROM registration WHERE email='".$row['email']."'";
				 	$result1= mysqli_query($con, $reg);
				 	$row1 = mysqli_fetch_assoc($result1);

					echo "<tr>";
					echo "<td>".$row1['name']."</td>";
					echo "<td>".$row['email']."</td>";
					echo "<td>".$row1['num']."</td>";
					echo "<td>".$row1['gender']."</td>";
					echo "<td>".$row1['blood']."</td>";
					echo "<td>".$row['hospital']."</td>";
					echo "<td>".$row['timing']."</td>";
					echo "<td>".$row['date']."</td>";
					echo "<td>".$row['message']."</td>";
					echo "</tr>";
				}
			?>	
		</table>
	</div>
</div> -->