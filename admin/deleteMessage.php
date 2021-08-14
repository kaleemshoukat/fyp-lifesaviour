<?php 
	session_start();

	$messageId =$_GET['id'];
	$con = mysqli_connect('localhost', 'root', '12345678', 'lifesaviour');
	$s = "DELETE FROM appointment WHERE id='".$messageId."'";
	
	if(mysqli_query($con, $s)){
		header('location:viewappointment.php');
	}
	else{
		echo "Not deleted.";
	}

?>