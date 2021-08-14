<?php
	//get news posted by admin.
	$con = mysqli_connect('localhost', 'root', '12345678', 'lifesaviour'); //connect db
	$s= "SELECT * FROM news";		//select query
	$result= mysqli_query($con, $s);		//run query

	// echo "<b style=\"color: gray;\">Admin Posts</b><br>";
	while( $row = mysqli_fetch_assoc($result)){
		echo $row['news']."<br><br>";
	}

	//get requests posted by users.
	$s= "SELECT * FROM blood_request";		//select query
	$result= mysqli_query($con, $s);		//run query

	while( $row = mysqli_fetch_assoc($result)){
		echo "<b style=\"color: #660033\">".$row['name']."</b><br>";
		echo $row['request']."<br>";
		echo "<b>Contact:</b><br>";
		echo $row['num']."<br>";
		echo $row['email']."<br><br>";
	}

?>



