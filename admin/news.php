<?php 
session_start();

// if(!isset($session['$email'])){			//without login user cannot see home page
// 	header('location:login.php');
// }
$con = mysqli_connect('localhost', 'root', '12345678', 'lifesaviour');
$news= $newsErr= $newsSuccess="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST["newsinput"])) {
		$newsErr = "*News is required*";
	}
	else {
		$news = test_input($_POST["newsinput"]);
	}


	if($newsErr==""){
		$newspost="INSERT INTO news(news) VALUES ('$news')";

		if(mysqli_query($con, $newspost)){
			$newsSuccess= "News posted successfully.";
			
		}
		else{
			$newsErr= "Post failed.";
		}	
		//return header('location:news.php');			//this will direct the admin to adduser page
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
    <title>Post News</title>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/style.css?v=1.1">
	<link rel="stylesheet" type="text/css" href="vendor/sidebar.css?v=1.1">
	<link rel="icon" href="images/logo.png" type="image/gif">
	<style type="text/css">
		tr:nth-child(odd) {
			background-color: #b8b894;
		}
	</style>
</head>
<body>

<?php  
	$page='news';
   include('includes/header.php');
   include('includes/sidebar.php');
?> 

<!-- Page content -->
<div class="content" style="padding-top: 100px;">
	<div class="row">
		<div class="col-md-6">	
			<h1 style="color: red;">Post News Alert</h1>	
		 	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
				<div class="form-group">
					<label><b>Here you can write new news.</b></label>
					<textarea name="newsinput" rows="3" class="form-control designinput" minlength="20"><?php $news; ?></textarea>
					<span class="error"><?php echo $newsErr; ?></span>
					<span style="color: green;"><?php echo $newsSuccess; ?></span>
				</div>

				<button type="submit" name="regbtn" class="btn btn-primary">Post</button>	
			</form>
		</div>
		<div class="col-md-6">
			<br><br>
			<img src="images/news1.png" style="margin-left: 100px;" width="200px" height="200px">
		</div>	 	
	</div> 	
</div>


<!-- Page content -->
<div class="content" style="padding-top: 50px; padding-bottom: 100px;">
	<div class="col-md-10">
		<h1 style="color: red;">Delete News Alert</h1>
		<b>Here you can delete the old news.</b>	
	 	<table class="table">
			<thead>
				<tr style="background-color: white !important;">
					<th>News</th>
					<th>Delete</th>
				</tr>
			</thead>
		 	<?php 
		 		$con = mysqli_connect('localhost', 'root', '12345678', 'lifesaviour'); //connect db
				$s= "select * from news";		//select query
				$result= mysqli_query($con, $s);		//run query
				
		 		while( $row = mysqli_fetch_array($result)){
		 			$newsId = $row['id'];
					echo "<tr>";
					echo "<td>".$row['news']."</td>";
					echo "<td><a href='deletenews.php?id=".$newsId."' onClick=\"javascript:return confirm('Are you sure you want to delete this?');\" style=\"color: red;  text-decoration: none;\">Delete</a></td>";
					echo "</tr>";
				}
		 	?>
		</table>
	</div> 	
</div>

<br><br>
<?php  
   include('includes/footer.php');
?> 

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>