<?php 
session_start();

$con= mysqli_connect('localhost','root','12345678');
mysqli_select_db($con, 'lifesaviour');

$email= $password= "";
$emailErr= $passwordErr= "";	

if ($_SERVER["REQUEST_METHOD"] == "POST") {	

	if (empty($_POST["email"])) {
		$emailErr = "*Email is required*";
	}
	else {
		$email = test_input($_POST["email"]);
		
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "*Invalid email format*"; 
		} 
	}

	if (empty($_POST["password"])) {
		$passwordErr = "*Password is required*";
	}
	else {
		$password = test_input($_POST["password"]);
	}

	if($emailErr=="" && $passwordErr==""){

		$s= "select * from registration where email ='$email'";	    //registration is table name in database
		$result= mysqli_query($con, $s);
		$rows= mysqli_fetch_array($result);
		if($rows){
			if($rows['password']==$password){
				$_SESSION['email']=$email;
				return header('location:home.php');
			}
			else {
				$passwordErr="*Incorrect password*";
			}	 
		}
		else{
			$emailErr="*Incorrect email*";
		}
	}	
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>