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
    <title>Home</title>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/style.css?v=1.1">
	<link rel="stylesheet" type="text/css" href="vendor/sidebar.css?v=1.1">
	<link rel="icon" href="images/logo.png" type="image/gif">
</head>
<body>

<?php  
   include('includes/header.php');
   include('includes/sidebar.php');
?> 


<!-- Page content -->
<div class="content" style="padding-top: 100px; padding-bottom: 100px; text-align: justify;">
 	<div class="row">
 		<div class="col-md-6">
 			<h1 style="color: red;">Welcome to Admin Panel</h1>
 			<p>The purpose of this admin panel is to manage all the user related work.</p>
 			<p>Here you can add a user in order to make him/her a part of this blood donation system. You can delete a user in case someone puts a complain against a specific user. You can post a news alert if there is an amergency in a hospital or a blood bank. Similary, you can view all the users of the website. You can also view the appointment messages of sent by the users for blood donation.</p>
 		</div>
 		<div class="col-md-6">
 			<img src="images/logo.png" height="300px" width="300px" style="margin-left: 100px;">
 		</div>
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