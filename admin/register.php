
<?php 
session_start();
//$con= mysqli_connect('localhost','root','12345678');
//mysqli_select_db($con, 'lifesaviour');

$con = mysqli_connect('localhost', 'root', '12345678', 'lifesaviour');
//if (isset($_POST['regbtn'])) {
	# code...


// define variables and set to empty values
$nameErr = $emailErr = $ageErr= $numberErr= $genderErr = $bloodErr = $cityErr= $addressErr= $passwordErr= "";
$name = $email = $age= $number= $gender= $blood= $city= $address= $password= "";

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


	if (empty($_POST["email"])) {
		$emailErr = "*Email is required*";
	}
	else {
		$email = test_input($_POST["email"]);
		
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "*Invalid email format*"; 
		} 
	}


	if (empty($_POST["age"])) {
		$ageErr = "*Age is required*";
	}
	else {
		$age = test_input($_POST["age"]);

		if (!preg_match("/^[0-9]*$/",$age)) {
			$ageErr = "*Only numeric value allowed*"; 
		}

		else if($age<18 || $age>60) {
			$ageErr = "*You can't donate blood due to age limitations*";
		}
	}


	if (empty($_POST["num"])) {
		$numberErr = "*Number is required*";
	} 
	else {
		$number = test_input($_POST["num"]);

		if (!preg_match("/^[0-9]*$/",$number)) {
			$numberErr = "*Only numeric value allowed*"; 
		}
	}


	if (empty($_POST["gender"])) {
		$genderErr = "*Gender is required*";
	}
	else {
		$gender = test_input($_POST["gender"]);
	}


	if (empty($_POST["address"])) {
		$addressErr = "*Address is required*";
	}
	else {
		$address = test_input($_POST["address"]);
	}


	if (empty($_POST["password"])) {
		$passwordErr = "*Password is required*";
	}
	else {
		$password = test_input($_POST["password"]);
	}




// $name= $_POST['name'];
// $email= $_POST['email'];
// $age= $_POST['age'];
// $number= $_POST['num'];
// $gender= $_POST['gender'];
 $blood= $_POST['blood'];
 $city= $_POST['city'];
// $address= $_POST['address'];
// $password= $_POST['password'];


 	if($nameErr=="" && $emailErr=="" && $ageErr=="" && $numberErr=="" && $genderErr==""&& $bloodErr=="" 
 		&& $cityErr=="" && $addressErr=="" && $passwordErr=="" ){

		$s= "select * from registration where email ='$email'";		//registration is table name in database
		//	$result= mysqli_query($con, $s);
		$res= mysqli_query($con, $s);
		//$result= mysqli_fetch_assoc($result);
		if (mysqli_num_rows($res) > 0) {
	            // output data of each row
	        ($row = mysqli_fetch_assoc($res));
	        if($email==$row['email'])
	        {
	            $emailErr= "*This email already exists*";
	        }
		}        
		else{

			$reg = "INSERT INTO registration(name,email,age,num,gender,blood,city,address,password) VALUES 
			('$name','$email','$age','$number','$gender','$blood','$city','$address','$password')";

			// echo $reg;
		    mysqli_query($con, $reg);
		    
		    echo mysqli_error($con);

		    echo "Registration successful...";
		   	header('location:adduser.php');			//this will direct to the adduser page to user
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
