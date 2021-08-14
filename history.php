<?php 
session_start();
// if(!isset($session['$email'])){			//without login user cannot see home page
// 	header('location:login.php');
// }

$con = mysqli_connect('localhost', 'root', '12345678', 'lifesaviour');
$user_from=$_SESSION['email'];				//current user

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

<div style="padding-top: 100px;"></div>

<?php 
$s= "SELECT * FROM donation WHERE user_from='$user_from'";		//select query
$result= mysqli_query($con, $s);		//run query
?>

<div class="container card bg-light" style="width: 50rem;">
	<br>		
  <img class="card-img-top" src="images/img2.jpg" alt="Card image cap">
  <div class="card-body">
    <h1 class="card-title">Donation History</h1>
    <p class="card-text"><b>The following content shows your donation history details.</b></p>
  </div>
  <ul class="list-group list-group-flush bg-light">
    
<?php  
while( $row = mysqli_fetch_assoc($result)){ ?>
    <li class="list-group-item bg-light">
    	<?php echo"You donated blood to ".$row['user_to']." on ".$row['date']."<br>"; ?> 		
    </li>
    
<?php
	} 
$s= "SELECT * FROM admin_don_count WHERE email='$user_from'";		//select query
$result= mysqli_query($con, $s);		//run query
while( $row = mysqli_fetch_assoc($result)){ ?>
    <li class="list-group-item bg-light">
    	<?php echo"You donated blood at ".$row['hospital']." on ".$row['date']."<br>"; ?> 		
    </li>
    
<?php
	}
?>
	<br>
  </ul>
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