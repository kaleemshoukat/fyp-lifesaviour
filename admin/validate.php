<?php 
session_start();
$con= mysqli_connect('localhost','root','12345678');
mysqli_select_db($con, 'lifesaviour');

$name= $password= "";
$nameErr= $passwordErr= "";	

// if (isset($_POST['regbtn'])) {
if ($_SERVER["REQUEST_METHOD"] == "POST") {	

	if (empty($_POST["name"])) {
		$nameErr = "*Name is required*";
	}
	else {
		$name = test_input($_POST["name"]);
		
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			$nameErr = "*Only letters and white spaces allowed*"; 
		}
	}

	if (empty($_POST["password"])) {
		$passwordErr = "*Password is required*";
	}
	else {
		$password = test_input($_POST["password"]);
	}

	if($nameErr=="" && $passwordErr==""){

// 	$name= $_POST['name'];
// 	$password= $_POST['password'];

		$s= "select * from admin where admin_name ='$name'";
		$result= mysqli_query($con, $s);
		$rows= mysqli_fetch_array($result);
		if($rows){
			if($rows['password']==$password){
				return header('location:home.php');
			}
			else {
				$passwordErr="*Incorrect password*";
			}	 
		}
		else{
			$nameErr="*Incorrect name*";
		}
	}	

	// $result= mysqli_query($con, $s);
	// $num= mysqli_num_rows($result);

	// if($num==1){
	// 	$_SESSION['name']=$name;
	// 	return header('location:home.php');
		 
	// }
	// else{
	// 	//echo "Email or password is incorrect.";
	// 	return header('location:login.html');
	// }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>