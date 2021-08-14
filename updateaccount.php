<?php
session_start();

$con = mysqli_connect('localhost', 'root', '12345678', 'lifesaviour'); //connect db
if (isset($_POST['regbtn'])) {
	$name= $_POST['name'];
	$age= $_POST['age'];
	$number= $_POST['num'];
	$gender= $_POST['gender'];
	$blood= $_POST['blood'];
	$city= $_POST['city'];
	$address= $_POST['address'];
	$password= $_POST['password'];

	$s = "UPDATE registration SET name='$name', age='$age', num='$number', gender='$gender', blood='$blood', city='$city', address='$address', password='$password' WHERE email='".$_SESSION['email']."' ";
	//echo $s;
	//exit();
	if(mysqli_query($con, $s)){
		return header('location:profile.php');
	}
	else{
		echo "Update fail";
	}
}
?>













<!-- 
<?php  
$con = mysqli_connect('localhost', 'root', '12345678', 'lifesaviour'); //connect db
$s="SELECT * FROM registration WHERE email='".$_SESSION['email']."'";
$result1=mysqli_query($con, $s);

while( $row = mysqli_fetch_assoc($result1)){
//echo ''  in single qutes because php don't recognize doble quotes within double quotes

echo ' <form role="form" method="post" action="htmlspecialchars($_SERVER["PHP_SELF"])">;
<div class="container">
<h1>Update Your Profile</h1>
<div class="row">
	
			
	 	<form action="updateaccount.php" method="post">
	 	<div class="col-md-6">
			<div class="form-group">
				<label><b>Full Name</b></label>
				<input type="text" name="name" value="'.$row['name'].'" class="form-control" required>
			</div>

			<div class="form-group">
				<label><b>Age</b></label>
				<input type="text" name="age" value="'.$row['age'].'" class="form-control" required>
			</div>

			<div class="form-group">
				<label><b>Mobile Number</b></label>
				<input type="text" name="num" value="'.$row['num'].'" class="form-control" required>
			</div>

			<div class="form-group">
				<label><b>Password</b></label>
				<input type="password" name="password" value="'.$row['password'].'" class="form-control" required>
			</div>

			<button type="submit" name="regbtn" class="btn btn-success">Update</button>

		</div>
		<div class="col-md-6">
			
			<div class="form-group" class="form-control" required>
				<label><b>Choose your gender</b></label><br>
				
				<label>Male</label>
				<input type="radio" name="gender" value="M">
				<label>Female</label>
				<input type="radio" name="gender" value="F">
				
			</div>

			<div class="form-group" class="form-control" required>
				<label><b>Blood group</b></label>
				<select name="blood">
					<option value="A+">A+</option>
					<option value="A-">A-</option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>
					<option value="O+">O+</option>
					<option value="O-">O-</option>
					<option value="AB+">AB+</option>
					<option value="AB-">AB-</option>
				</select>
			</div>

			<div class="form-group" class="form-control" required>
				<label><b>City</b></label>
				<select name="city">
					<option value="lahore">Lahore</option>
					<option value="karachi">Karachi</option>
					<option value="multan">Multan</option>
					<option value="rawalpindi">Rawalpindi</option>
					<option value="peshawer">Peshawer</option>
					<option value="quetta">Quetta</option>
				</select>
			</div>

			<div class="form-group">
				<label><b>Address</b></label>
				<textarea name="address" rows="3" class="form-control"></textarea>
			</div>

		</div>	
		</form> 	
	
</div>	
</div>
</form>
';
}

?>
 -->
