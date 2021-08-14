<?php 
	session_start();

	$requestId =$_GET['id'];
	$con = mysqli_connect('localhost', 'root', '12345678', 'lifesaviour');
	$s = "DELETE FROM blood_request WHERE id='".$requestId."'";
	
	if(mysqli_query($con, $s)){
		header('location:postreq.php');
	}
	else{
		echo "Not deleted.";
	}

?>