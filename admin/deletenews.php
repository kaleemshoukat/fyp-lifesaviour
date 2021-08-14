<?php 
if(!session_id()){
	session_start();
}
$newsId =$_GET['id'];
	$con = mysqli_connect('localhost', 'root', '12345678', 'lifesaviour');
	$s = "DELETE FROM news WHERE id='".$newsId."'";
	
	if(mysqli_query($con, $s)){
		header('location:news.php');
	}
	else{
		//echo "Not deleted.";
		$_SESSION['error']  = "Not deleted.";
		header('location:news.php');
	}

?>