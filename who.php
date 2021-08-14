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
	<title>Who can Donate Blood</title>
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
            <h1 style="color: red;">Blood Donation: Who Can Give Blood?</h1>
            <p>You are eligible to donate blood if you are in good health, weigh at least 110 pounds and are 18 years or older.</p>
            <p>You are not eligible to donate blood if you:</p>
            <ul>
                <li>Have ever used self-injected drugs (non-prescription).</li>
                <li>Had hepatitis.</li>
                <li>Are in a high-risk group for AIDS.</li>
            </ul>
            <img src="images/who2.PNG" height="400" width="730">
            <h2 style="color: red;">Basic Eligibility Guidelines</h2>
            <h3 style="color: #996633;">Age:</h3>
            <p> You must be at least 18 years old to donate to the general blood supply. There is no upper age limit for blood donation as long as you are well with no restrictions or limitations to your activities.</p>
            <h3 style="color: #996633;">High Blood Pressure:</h3>
            <p>Acceptable as long as your blood pressure is below 180 systolic (first number) and below 100 diastolic (second number) at the time of donation. Medications for high blood pressure do not disqualify you from donating.</p>
            <h3 style="color: #996633;">Body Piercing:</h3>
            <p>You must not donate if you have had a tongue, nose, belly button or genital piercing in the past 12 months (donors with pierced ears are eligible).</p>
            <h3 style="color: #996633;">Cold and Flu:</h3>
            <p>Wait if you have a fever or a productive cough (bringing up phlegm). Wait if you do not feel well on the day of donation. Wait until you have completed antibiotic treatment for sinus, throat or lung infection.</p>
            <h3 style="color: #996633;">Diabetes:</h3>
            <p>Acceptable as long as it is well controlled, whether medication is taken or not.</p>
            <h3 style="color: #996633;">Diet:</h3>
            <p>A meal is recommended at least four hours prior to donation. Drink plenty of fluids.</p>
            <h3 style="color: #996633;">Tattoos:</h3>
            <p>One-year deferral.</p>
            <h3 style="color: #996633;">Weight:</h3> 
            <p>You must weight at least 110 pounds to be eligible for blood donation for your own safety. Blood volume is in proportion to body weight. Donors who weigh less than 110 pounds may not tolerate the removal of the required volume of blood as well as those who weigh more than 110 pounds. There is no upper weight limit as long as your weight is not higher than the weight limit of the donor bed or lounge you are using. You can discuss any upper weight limitations of beds and lounges with your local health historian.</p>
            <h3 style="color: #996633;">Travel:</h3> 
            <p>People who have recently traveled to or lived abroad in certain countries may be excluded because they are at risk for transmitting agents such as malaria or variant Creutzfeldt-Jakob Disease (vCJD).</p>
            <img src="images/who1.PNG" height="350" width="730" style="margin-top: 10px; margin-bottom: 10px;">
            <h2 style="color: red;">Frequently Asked Questions</h2>
            <p><b>Q.</b> Can I donate blood if I had jaundice previously?<br> 
            <b>Ans.</b> No, if you have a history of jaundice in the past, you need to be screened for hepatitis before donating blood.</p> 
            <p><b>Q.</b> How much blood is taken?<br>
            <b>Ans.</b> For a whole blood donation, approximately one pint (which weighs about one pound-up to 500 ml) is collected.</p>
            <p><b>Q.</b> How often can I donate?<br>
            <b>Ans.</b> The interval between blood donations should be at least 8 weeks.</p>
            <p><b>Q.</b> Is there anything I should do before I donate?<br>
            <b>Ans.</b> Be sure to eat well at your regular mealtimes and drink plenty of fluids.</p>
            <p><b>Q.</b> Will donating blood hurt?<br>
            <b>Ans.</b>  No more than a pinch in the beginning!  Our skilled phlebotomists make donating blood as painless and comfortable as possible.</p>
            <p><b>Q.</b> How much time does it take for my body to replace the blood that I donated?<br>
            <b>Ans.</b>  Not long at all. The volume of fluids will adjust within a few hours of your donation.  The red blood cells will be replaced within a few weeks.</p>
            <p><b>Q.</b> What type of tests are performed on donated blood?<br>
            <b>Ans.</b> After blood is drawn, it is tested for Blood Group, Hepatitis B & C, HIV (AIDS Virus) and certain other infectious diseases to ensure the donor and the patient’s safety.</p>
            <p><b>Q.</b>  Can I smoke after donation?<br>
            <b>Ans.</b> Smoking is better avoided for at least 2 hours after donating blood because it may result in dizziness and a fainting attack.  Remember, smoking is dangerous to your health anyway!</p>           
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