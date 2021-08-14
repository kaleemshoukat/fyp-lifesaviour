<?php 
session_start();
// if(!isset($session['$email'])){			//without login user cannot see home page
// 	header('location:login.php');
// }

$con = mysqli_connect('localhost', 'root', '12345678', 'lifesaviour');
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>Badges</title>
	<link rel="stylesheet" type="text/css" href="vendor/style.css?v=1.4">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="icon" href="images/logo.png" type="image/gif">
</head>
<body>
 
<?php  
   include('includes/header.php');
?>

<div class="wrap" style="padding-top: 100px; padding-left: 150px;">
<h1>Badges</h1>
<p>Badges are given to the top donors of the website after every end of the year.</p>
<h3>Top Donors</h3>


<?php 
$s="SELECT user_from, COUNT(user_from) as donation_count FROM `donation` GROUP BY user_from ORDER BY donation_count DESC LIMIT 3";
$result= mysqli_query($con, $s);		//run query
 
// $s="SELECT email, COUNT(admin_count) as admin_count FROM `admin_don_count` GROUP BY email ORDER BY admin_count DESC LIMIT 3";
// $result= mysqli_query($con, $s);


//print_r($result); exit();
while( $row = mysqli_fetch_assoc($result)){   
?>
<div class="container card bg-light" style="width: 20rem;">
  <br>		
  <img class="card-img-top" src="images/redstar.png" alt="Card image cap" height="250px">
  <div class="card-body">
    <?php 
      $email=$row['user_from'];
      $s= "SELECT * FROM registration WHERE email='$email'";   //select query
      $result1= mysqli_query($con, $s);    //run query
      $row1 = mysqli_fetch_assoc($result1);
    ?>
      <h2><?php echo $row1['name']; ?></h2>
      <h6>Email: <?php echo $row1['email']; ?></h6>
      <h6>Gender: <?php echo $row1['gender']; ?></h6>
      <h6>Blood Group: <?php echo $row1['blood']; ?></h6>
      <h6>City: <?php echo $row1['city']; ?></h6>
  </div> 
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