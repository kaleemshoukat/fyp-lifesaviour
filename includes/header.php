 <!-- <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <div class="container">
        <div class="collapse navbar-collapse">
            <a class="navbar-brand" href="home.php"> <img src="images/logo.jpg" 
                        alt="Logo" style="width:50px;">
                        <b>Life Saviour</b>
            </a>
            



             <a href="logout.php"><button class="btn btn-outline-primary" type="submit">Logout</button></a>         
            
        </div>
    </div>
</nav>
 
-->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">




<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">  <!-- or remove bg-light style="margin-top: 72px;" -->
       
          <a class="navbar-brand" href="home.php">
            <img src="images/logo.png" alt="Logo" style="width:50px;"><b>Life Saviour</b></a>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">  <!-- ml-auto to move right  -->
              <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Blood Donation
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="why.php"><b>Why donate blood?</b></a>
                  <a class="dropdown-item" href="who.php"><b>Who can donate blood?</b></a>
                </div>  
              </li>

              <li class="nav-item">
                <a class="nav-link" href="map.php">Find Doners</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="nearby.php">Nearby Hospitals</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="credit.php">Give Credits</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="badges.php">Badges</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="postreq.php">Post Request</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="appointment.php">Book Appointment</a>
              </li>
            </ul> 


       


    <li class="nav-link nav-item dropdown">
      <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-id-card-alt fa-2x"></i>

      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
        <div class="dropdown-item">
        <?php 
            $con = mysqli_connect('localhost', 'root', '12345678', 'lifesaviour'); //connect db
            $s= "SELECT name,email,age,num,gender,blood,city,address,password 
            FROM registration WHERE email='".$_SESSION['email']."'";//select query
            $result= mysqli_query($con, $s);    //run query
            $row = mysqli_fetch_assoc($result);
            echo "<b>".$row['name']."</b><br>";
            echo $row['email'];
          ?>
        </div>  
        <div class="dropdown-divider"></div>  
        <a class="dropdown-item" href="profile.php"><i class="fas fa-eye"></i> View Your Profile</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="editprofile.php"><i class="far fa-edit"></i> Edit your Profie</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="history.php"><i class="fa fa-history"></i> View Donation History</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="deleteaccount.php"><i class="fas fa-ban"></i> Disable Account</a>
      </div>
    </li>

        <a href="logout.php"><button class="btn btn-outline-primary" type="submit">Logout</button></a>  
            
          </div>
      
</nav>


<!-- 
<li class="nav-link nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fa fa-bell"> Requests
        <span class="badge badge-info">1</span>
      </i>
  </a>


  <div class="dropdown-menu dropdown-menu-right" style="min-width: 300px;" aria-labelledby="contactsDropdown">
    
    <a class="dropdown-item" href="#">
      <img src="images/request.png" class="rounded-circle" style="width: 50px; height: 50px;">
      <div class="text-left user-item" style="display: inline-block; margin-left: 10px; width: 100px;">
        Name requested for blood
      </div><br>
      <span class="text-right" style="margin-left: 65px;">
          <input type="button" class="btn btn-primary btn-sm" value="Accept">
          <input type="button" class="btn btn-primary btn-sm" value="Reject">
      </span>
    </a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">
      <img src="images/request.png" class="rounded-circle" style="width: 50px; height: 50px;">
      <div class="text-left user-item" style="display: inline-block; margin-left: 10px; width: 100px;">
        Name requested for blood
      </div><br>
      <div style="display: inline-block; margin-left: 65px;">
        <input type="button" class="btn btn-primary btn-sm" value="Accept">
        <input type="button" class="btn btn-primary btn-sm" value="Reject">
      </div>
    </a>
  </div>
</li>
 -->        
            



