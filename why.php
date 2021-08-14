<?php
session_start();

// if(!isset($session['$email'])){          //without login user cannot see home page
//  header('location:login.php');
// }
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>Why Donate Blood</title>
	<link rel="stylesheet" type="text/css" href="vendor/style.css?v=1.4">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="images/logo.png" type="image/gif">
</head>
<body>
 
<?php  
   include('includes/header.php');       
?>

<div class="container" style="padding-top: 100px; text-align: justify;">
    <div class="row">  
    	<div class="col-md-8">
            <h1 style="color: #990033">Blood Donation</h1>
            <p>
            	Blood donation is a major concern to the society as donated blood is lifesaving for individuals who need it. Blood is scarce. There is a shortage to active blood donors to meet the need of increased blood demand. Blood donation as a therapeutic exercise. Globally, approximately 80 million units of blood are donated each year. One of the biggest challenges to blood safety particularly is accessing safe and adequate quantities of blood and blood products. Safe supply of blood and blood components is essential, to enable a wide range of critical care procedures to be carried out in hospitals. Good knowledge about blood donation practices is not transforming in donating blood. Interactive awareness on blood donation should be organized to create awareness and opportunities for blood donation. Blood donation could be therefore recommended that voluntary blood donations as often as possible may be therapeutically beneficial to the donors in terms of thrombotic complications and efficient blood flow mechanisms. This is also a plus for blood donation campaigns.
            </p>
            <img src="images/imgqute.png" height="450" width="730" style="margin-top: 10px; margin-bottom: 20px;">
            <center><p style="font-family: cursive; font-size: 40px; color: #e60000;">“Donate your blood for a reason, let the reason to be life”</p></center>
            <h2 style="color: #990033">How Donating Helps</h2>
            <p>Every 5 seconds, someone in Pakistan needs blood. Donating blood can help:</p>
            <ul>
                <li>People who go through disasters or emergency situations.</li>
                <li>People who lose blood during major surgeries.</li>
                <li>People who have lost blood because of a gastrointestinal bleed.</li>
                <li>Women who have serious complications during pregnancy or childbirth.</li>
                <li>People with cancer or severe anemia sometimes caused by thalassemia or sickle cell disease.</li>
            </ul>
            <img src="images/quote1.PNG" height="400" width="730" style="margin-top: 10px; margin-bottom: 20px;">
            <center><p style="font-family: cursive; font-size: 40px; color: #e60000;">“Bring a life back to power. Make blood donation your responsibility”</p></center> 
            <h2 style="color: #990033">Health Benefits of Blood Donation</h2>
            <ul>
                <li>Promotes good health.</li>
                <li>Aids in weight loss of donors.</li>
                <li>Lowers risk of hemochromatosis.</li>
                <li>Helps in lowering the risk of cancer.</li>
                <li>Boosts production of new blood cells.</li>
                <li>Helps prevent heart and liver ailments caused by iron overload.</li>
                <li>Donating blood reduces your risk of heart disease and cholesterol.</li>
                <li>When donating blood, you are removing 225 to 250mg of iron from your body, reducing your risk of health complications.</li>
            </ul>
            <img src="images/quote2.PNG" height="300" width="730" style="margin-top: 10px; margin-bottom: 20px;">
            <center><p style="font-family: cursive; font-size: 40px; color: #e60000;">“Don’t let mosquitoes get your blood first”</p></center> 
            <h2 style="color: #990033">Reasons Why You Should Give Blood</h2>   
            <ul>
                <li>It saves lives, what else do you need to know?</li>
                <li>It is not more painful then losing a loved one that you may save by donating!</li>
                <li>It is your civic duty.</li>
                <li>Because I know too many people who can’t give blood.</li>
                <li>Because some day, I may need someone to do the same for me.</li>
                <li>Do unto others, as you would have them do unto you!</li>
                <li>Because if you need blood one day, you would not hesitate to take it, so why would you hesitate to give it?</li>
                <li>Blood donation is important because maintaining an adequate blood supply in our community secures blood transfusions for patients.</li>
                <li>Because I can.</li>
                <li>Nutter Butters.</li>
                <li>The question is, why not give blood?</li>
                <li>It gives donors a medical check at no cost. </li>
                <li>Free cookies, juice and the satisfaction of helping others.</li>
                <li>I can’t discover a cure for cancer, but I can help keep someone alive while they are waiting for a cure.</li>
            </ul>                
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