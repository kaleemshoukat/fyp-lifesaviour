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
    <title>view users</title>
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
	$page='viewuser';
   include('includes/header.php');
   include('includes/sidebar.php');
?> 


<div class="content" style="padding-top: 100px;">
<h1 style="color: red;">All Current Users</h1><br>	
	<div class="row justify-content-center">
		<table class="table">
			<thead>
				<tr style="background-color: white !important;">
					<th>Name</th>
					<th>Email</th>
					<th>Age</th>
					<th>Number</th>
					<th>Gender</th>
					<th>Blood Group</th>
					<th>City</th>
					<th>Address</th>
				</tr>
			</thead>
			<?php
				$con = mysqli_connect('localhost', 'root', '12345678', 'lifesaviour'); //connect db
				$s= "select * from registration";		//select query
				$result= mysqli_query($con, $s);		//run query


				 while( $row = mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['email']."</td>";
					echo "<td>".$row['age']."</td>";
					echo "<td>".$row['num']."</td>";
					echo "<td>".$row['gender']."</td>";
					echo "<td>".$row['blood']."</td>";
					echo "<td>".$row['city']."</td>";
					echo "<td>".$row['address']."</td>";
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