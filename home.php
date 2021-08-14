<?php 
session_start();

// if(!isset($session['$email'])){			//without login user cannot see home page
// 	header('location:login.php');
// }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="vendor/style.css?v=1.4">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="images/logo.png" type="image/gif">
</head>
<body style="text-align: justify;">
 
<?php  
   include('includes/header.php');       
  include('includes/slider.php');
?>

<br><br>

<div class="container">
    <div class="row">  
    	<div class="col-md-8">
            <h1 style="color: #990033">Life Saviour Mission</h1>
            <p>The Life Saviour has a team of highly motivated people, who maintain a complete data bank of donors that include volunteers from different cities and places of Pakistan.</p>
            <p>
            Life saviour helps in securing timely blood donations in emergencies as well as in routine requirements.
            </p>
            <ul>
                <li>
                    To create awareness of donating blood and conducting health awareness programs.
                </li>
                <li>
                    To motivate students to donate blood.
                </li>
                <li>
                    To develop a database of our donors for blood donation.
                </li>
                <li>
                     To connect needy with volunteer blood donors.
                </li>
            </ul>
            <p>
                The main purpose of this website is to setup a system which is beneficial to people who are in need of blood due to medical emergencies. It has been noticed that usually it takes a lot of time to find a person with the required blood group, the normal process or practice is to call or text people in family or friends  for help who then call or text other people in order to find the desired blood group. The mission is to perform a critical role in healthcare by providing a safe, secure and cost effective supply of quality blood products. Life Saviour will be recognized for saving and improving lives in our community with safe and reliable blood donations.
            </p>
    	</div>  

        <div class="col-md-4">
            <div class="card">
                <blink class="blinking">
                    <h4 class="card-header">News Alert</h4>
                </blink> 
                
               <div style=" height: 400px; overflow:hidden;">   
                <marquee behavior="scroll" direction="up" onmouseover="this.stop();"
                        onmouseout="this.start();">
                        <p style="padding-left: 2%; padding-right: 2%; font-family: sans-serif;">
                            <?php include('includes/getnews.php'); ?>
                        </p>
                </marquee>
                </div>
            </div>
        </div>
    </div>    

    <div class="row">
        <div class="col-md-8">
            <h2 style="color: #990033">Blood cells types</h2>
            <p>
                A blood cell, also called a hematopoietic cell, hemocyte, or hematocyte, is a cell produced through hematopoiesis and found mainly in the blood. Major types of blood cells include:
            </p>
            <ul>
                <li>
                    Red blood cells (erythrocytes)
                </li>
                <li>
                    White blood cells (leukocytes)
                </li>
                <li>
                    Platelets (thrombocytes)
                </li>
            </ul>
            <p>
                Together, these three kinds of blood cells add up to a total 45% of the blood tissue by volume, with the remaining 55% of the volume composed of plasma, the liquid component of blood.
            </p>
        </div>
        <div class="col-md-4" style="padding-top: 10px; color: #996633;">
            <div class="card">
                <h4 class="card-header">Admin Contacts</h4>    
               <div style=" height: 150px; margin: 7px;"> 
                <p>In case of any problem feel free to contact us.</p>  
                0335-1441256<br>
                kaleemshoukat96@gmail.com<br>
                0334-2233124<br>
                iqraanwar565@gmail.com
                </div>
            </div>
        </div>
        
    </div>

    
    <div class="row">    
        <div class="col-md-4">
            <div class="card bg-light">
            <h4 style="color: red; margin: 7px;">Red blood cells</h4>
            <img src="images/red.jpg" height="200" width="348">
            <p style="margin: 7px;">
                Red blood cells or erythrocytes, primarily carry oxygen and collect carbon dioxide through the use of haemoglobin. Red blood cells are the most abundant cell in the blood, accounting for about 40-45% of its volume. In adults, about 2.4 million RBCs are produced each second. RBCs have a lifespan of approximately 100-120 days.
            </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-light">
            <h4 style="color: red; margin: 7px;">White blood cells</h4>
            <img src="images/white.jpg" height="200" width="348">
            <p style="margin: 7px;">
                White blood cells or leukocytes, are cells of the immune system involved in defending the body against both infectious disease and foreign materials. They are produced and derived from multipotent cells in the bone marrow known as a hematopoietic stem cells. WBCs constitute approximately 1% of the blood volume.
            </p>
            </div>
        </div>
    </div>
    <br>
    <div class="row">    
        <div class="col-md-8">
            <div class="card bg-light">
            <h4 style="color: red; margin: 7px;">Platelets</h4>
            <img src="images/platelets.jpg" height="300" width="728">
            <p style="margin: 7px;">
                Platelets, or thrombocytes, are very small, irregularly shaped clear cell fragments, 2–3 µm in diameter, which derive from fragmentation of megakaryocytes. The average lifespan of a platelet is normally just 5 to 9 days. Platelets are a natural source of growth factors. They circulate in the blood of mammals and are involved in hemostasis, leading to the formation of blood clots. Platelets release thread-like fibers to form these clots.
            </p>
            </div>
        </div>
    </div>
    <br>

    <div class="col-md-8">
        <div class="container row">
            <h2 style="color: #990033">Most common blood types</h2>
            <p>There are eight main blood types but some are more common than others. The list below shows the percentage of donors with each blood type:</p>
        </div>    
        <div class="container card bg-light">    
            <div class="row">    
                <div class="col-md-4">
                    <ul>
                        <li>O positive: 35%</li>
                        <li>O negative: 13%</li>
                        <li>A positive: 30%</li>
                        <li>A negative: 8%</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li>B positive: 8%</li>
                        <li>B negative: 2%</li>
                        <li>AB positive: 2%</li>
                        <li>AB negative: 1%</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="container">
        <div class="col-md-8">
            <h2 style="color: #990033">Blood Compatibility</h2>
            <p>When a transfusion is given, it is preferable for patients to receive blood and plasma of the same ABO and RhD group.  However if the required blood type is unavailable, a patient may be given a product of an alternative but compatible group. To learn about blood group compatibility watch the <b>vedio</b> below.</p>
            <div class="embed-responsive embed-responsive-16by9">
                <!-- <iframe class="embed-responsive-item" src="images/vedio.mp4" allowfullscreen></iframe> -->
                <video controls="true" class="embed-responsive-item">
                    <source src="images/vedio.mp4" type="video/mp4" />   <!-- / this is not autoplay -->
                </video>
            </div>
        </div>
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