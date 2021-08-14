<?php 
session_start();

// if(!isset($session['$email'])){			//without login user cannot see home page
// 	return header('location:appointment.php');
// }

$con = mysqli_connect('localhost', 'root', '12345678', 'lifesaviour');
$email=$_SESSION['email'];

$hospital= $timing= $date= $message="";
$hospitalErr= $timingErr= $dateErr= $messageErr="";
$error= "";
$today=date("m/d/20y");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (empty($_POST["hospital"])) {
		$hospitalErr = "*Hospital name is required*";
	}
	else {
		$hospital = test_input($_POST["hospital"]);
	}

	if (empty($_POST["timing"])) {
		$timingErr = "*Timing is required*";
	}
	else {
		$timing = test_input($_POST["timing"]);
	}

	if (empty($_POST["date"])) {
		$dateErr = "*Date is required*";
	}
	else {
		$date = test_input($_POST["date"]);
	}

	if (empty($_POST["message"])) {
		$messageErr = "*Message is required*";
	}
	else {
		$message = test_input($_POST["message"]);
	}

	// $hospital= $_POST['hospital'];
	// $timing= $_POST['timing'];
	// $date=$_POST['date'];
	// $message= $_POST['message'];

	if($hospitalErr=="" && $timingErr=="" && $dateErr=="" && $messageErr==""){

		if($date<=$today){
			$error="*You can only select after current date*";
		}
		else{
		
			$s = "INSERT INTO appointment(email,hospital,timing,date,message) VALUES 
			('$email','$hospital','$timing','$date','$message')";
			// echo $reg;
		    mysqli_query($con, $s);
		    header('location:appointment.php');
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


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Book Appointment</title>
	<link rel="stylesheet" type="text/css" href="vendor/style.css?v=1.8">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-datepicker.min.css">
	<link rel="icon" href="images/logo.png" type="image/gif">
</head>
<body>
 
<?php  
   include('includes/header.php');
?>


<div class="container" style="padding-top: 100px;">
	<h1>Book Appointment</h1>
	<div class="row">
		<div class="col-md-6">
			<p>You can book your appointment here whenever you are ready to donate blood. You will recevie an email when your appointment is booked at hospital/blood bank.</p>
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
				<div class="form-group">
					<label><b>Hospital/Blood Bank Name</b></label>
					<input type="text" name="hospital" class="form-control designinput" value="<?php echo $hospital ?>">
					<span class="error"><?php echo $hospitalErr ?></span>
				</div>

				<div class="form-group" class="form-control">
					<label><b>Choose Timing</b></label><br>
					
					<label>Morning</label>
					<input type="radio" name="timing" value="Morning" <?php echo ($timing == 'Morning')?"checked":""; ?>>
					<label>Evening</label>
					<input type="radio" name="timing" value="Evening" <?php echo ($timing == 'Evening')?"checked":""; ?>>
					<span class="error"> <?php echo $timingErr ?></span>
				</div>

				<div class="form-group">
					<label><b>Select Donation Date</b></label><br>
					<div class='input-group date' id='datetimepicker1'>
	                    <input type='text' class="form-control designinput" name="date" placeholder="mm/dd/yyyy"
	                    value="<?php echo $date ?>">
	                    <span class="input-group-addon">
	                        <span class="glyphicon glyphicon-calendar"></span>
	                    </span>
		            </div>
		            <!-- <input type="date" name="date" class="form-control" value="<?php echo $date ?>"> -->
		            <span class="error"><?php echo $dateErr ?></span>
		            <span class="error"><?php echo $error ?></span>
				</div>

				<div class="form-group">
					<label><b>Message</b></label>
					<textarea name="message" rows="4" class="form-control designinput" minlength="15"><?php echo $message ?></textarea>
					<span class="error"><?php echo $messageErr ?></span>
				</div>

				<button type="submit" name="regbtn" class="btn btn-primary">Book</button>
			</form>
		</div>
		<div class="col-md-6">
			<img src="images/postreq.png" height="500px" width="500px" style="margin-left: 50px;">
		</div>
	</div>
</div>

<br><br> 
<?php  
   include('includes/footer.php');
?> 

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datepicker();
            });
</script>
</body>
</html>