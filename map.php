<?php
session_start();

include('includes/header.php');
//db connection
$con= mysqli_connect('localhost','root','12345678');
mysqli_select_db($con, 'lifesaviour');

//this is for current user
$sql= "select * from registration where email ='".$_SESSION['email']."'";
$result = mysqli_query($con, $sql);
while( $row = mysqli_fetch_assoc($result)){
    $user = $row;
}
$lat = $user['latitude'];
$long = $user['longitude'];
$email = $user['email'];
//this is for other users
$sql = "select * from registration where not email ='".$_SESSION['email']."'";
$result = mysqli_query($con, $sql);
while( $row = mysqli_fetch_assoc($result)){
    $all_users[] = $row;
}
$count = count($all_users);   //to count all other users excluding the current user
$all_users = json_encode($all_users); // converts into json format

/*
$user_ip = '39.45.212.9'; //getenv('REMOTE_ADDR');
$geo = @unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
$city = $geo["geoplugin_city"];
$region = $geo["geoplugin_regionName"];
$country = $geo["geoplugin_countryName"];
$latitude = $geo["geoplugin_latitude"];
$longitude = $geo["geoplugin_longitude"];
echo "City: ".$city."<br>";
echo "Region: ".$region."<br>";
echo "Country: ".$country."<br>";
echo "Latitude: ".$latitude."<br>";
echo "Longitude: ".$longitude."<br>";
/*
geoplugin_request
geoplugin_status
geoplugin_credit
geoplugin_city
geoplugin_region
geoplugin_areaCode
geoplugin_dmaCode
geoplugin_countryCode
geoplugin_countryName
geoplugin_continentCode
geoplugin_latitude
geoplugin_longitude
geoplugin_regionCode
geoplugin_regionName
geoplugin_currencyCode
geoplugin_currencySymbol
geoplugin_currencySymbol_UTF8
geoplugin_currencyConverter
*/
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Find Donor</title>
    <link rel="stylesheet" type="text/css" href="vendor/style.css?v=1.4">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="images/logo.png" type="image/gif">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        /*background-image: url(images/home5.jpg);
        background-size: cover;*/
      }
    </style>
  </head>
<body>

<?php  
  include('includes/header.php');       
?>

<div class="container" style="padding-top: 100px;">
<h3>Available Doners</h3>
</div>
    <!--The div element for the map -->
<div class="container" id="map"></div>

<div class="container">
  <p><b>Whenever a donor dontes you blood make sure you give him/her credits <a href="credit.php">here</a>.</b></p>
</div>

<br><br> 
<?php  
   include('includes/footer.php');
?> 

<!-- <div id="myHtml">
  <button type="submit" name="reqbtn" class="btn btn-primary btn-sm">Send Request</button>
</div> -->


<script>
        
  var count = <?=$count;?>;         // = means php echo
  var all_users = <?=$all_users;?>;
        // Initialize and add the map
  function initMap() {
      // The location of Uluru i.e current user
      var uluru = {lat: <?= $lat; ?>, lng: <?php echo $long; ?>};
      // The map, centered at Uluru
      var map = new google.maps.Map(
          document.getElementById('map'), {zoom: 15, center: uluru});
      // The marker, positioned at Uluru   //icon will add blue marker for current user
      var marker = new google.maps.Marker({position: uluru, map: map,
        icon: {
               url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
              },
        title: 'your location'      
      });
      

      //creating infowindow variable  
      var infowindow=new google.maps.InfoWindow();  

      
      //loop for location of other all users
      for(var i=0;i<count;i++){
        var uluru = {lat: parseFloat(all_users[i]['latitude']), lng: parseFloat(all_users[i]['longitude'])};
        
        var marker = new google.maps.Marker({position: uluru, map: map,
        label: { color: '#ffffff', fontWeight: 'bold', fontSize: '14px', text: all_users[i]['blood'] },
        title: 'click to view contact' 
        });


        //infowindow conte
        var dataset = {};
        dataset.content ="<h6>"+all_users[i]['name']+"</h6>"+all_users[i]['num']+"<br>"+all_users[i]['email'];
        //var latitude =all_users[i]['latitude']; 
        //var longitude =all_users[i]['longitude']; 

        //calling the function  
        bindinfowindow(marker,map, infowindow ,dataset);

      }
      
      //on click display dataset of infowindow on related marker
      function bindinfowindow(marker, map, infowindow, dataset ){
          marker.addListener('click', function(){
            //console.log({dataset});
            infowindow.setContent(dataset.content);
            //infowindow.setContent(latitude);
            //console.log(latitude);
            //var reqemail = dataset.userInfo;
            infowindow.open(map,this);



            
            });
      }
  }

   console.log(all_users);

</script>


<!--Load the API from the specified URL
* The async attribute allows the browser to render the page while the API loads
* The key parameter will contain your own API key (which is not needed for this tutorial)
* The callback parameter executes the initMap() function    -->

<!-- used for map -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_eBixPALw4D21f5kyHk42YqvLhAfC-NU&callback=initMap">
</script>


<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
 --><script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>