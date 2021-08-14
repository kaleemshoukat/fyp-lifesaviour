<?php 
//db connection
session_start();
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

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Nearby Hospitals</title>
    <link rel="stylesheet" type="text/css" href="vendor/style.css?v=1.4">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="images/logo.png" type="image/gif">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
        margin-right: 80px;
        margin-left: 80px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
/*        background-image: url(images/home5.jpg);
        background-size: cover;*/
      }
      #right-panel {
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 50px;
      }

      #right-panel select, #right-panel input {
        font-size: 15px;
      }

      #right-panel select {
        width: 100%;
      }

      #right-panel i {
        font-size: 12px;
      }
      #right-panel {
        font-family: Arial, Helvetica, sans-serif;
        position: absolute;
        right: 5px;
        top: 60%;
        margin-top: -195px;
        height: 330px;
        width: 200px;
        padding: 5px;
        z-index: 5;
        border: 1px solid #999;
        background: #fff;
      }
      #h2 {
        font-size: 22px;
        margin: 0 0 5px 0;
      }
      #places {
        list-style-type: none;
        padding: 0;
        margin: 0;
        height: 271px;
        width: 200px;
        overflow-y: scroll;
      }
      #places > li {
        background-color: #f1f1f1;
        padding: 10px;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
      }
      #places > li:nth-child(odd) {
        background-color: #fcfcfc;
      }
      #more {
        width: 100%;
        margin: 5px 0 0 0;
      }
	</style>
</head>

<body>
<?php  
  include('includes/header.php');       
?>

<div style="padding-top: 100px; margin-left: 75px;">
  <h3>Nearby Hospitals</h3>  
</div>

<div id="map"></div>
<div style="margin-left: 75px;">
  <p><b>Whenever a donor dontes you blood make sure you give him/her credits <a href="credit.php">here</a>.</b></p>
</div>

<script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var map;

      function initMap() {
        // Create the map.
        var pyrmont = {lat: <?= $lat; ?>, lng: <?php echo $long; ?>};
        map = new google.maps.Map(document.getElementById('map'), {
          center: pyrmont,
          zoom: 15
        });
        // The marker of user positioned at pyrmont   //icon will add blue marker for current user
        var marker = new google.maps.Marker({position: pyrmont, map: map,
        icon: {
               url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
              },
        title: 'your location'      
        });

        // Create the places service.
        var service = new google.maps.places.PlacesService(map);
        var getNextPage = null;
        var moreButton = document.getElementById('more');
        moreButton.onclick = function() {
          moreButton.disabled = true;
          if (getNextPage) getNextPage();
        };

        // Perform a nearby search.
        service.nearbySearch(
            {location: pyrmont, radius: 600, type: ['hospital']},
            function(results, status, pagination) {
              if (status !== 'OK') return;

              createMarkers(results);
              moreButton.disabled = !pagination.hasNextPage;
              getNextPage = pagination.hasNextPage && function() {
                pagination.nextPage();
              };
            });
      }

      function createMarkers(places) {
        var bounds = new google.maps.LatLngBounds();
        var placesList = document.getElementById('places');

        for (var i = 0, place; place = places[i]; i++) {
          var image = {
            url: place.icon,
            size: new google.maps.Size(71, 71),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),
            scaledSize: new google.maps.Size(25, 25)
          };

          var marker = new google.maps.Marker({
            map: map,
            icon: image,
            title: place.name,
            position: place.geometry.location
          });

          var li = document.createElement('li');
          li.textContent = place.name;
          placesList.appendChild(li);

          bounds.extend(place.geometry.location);
        }
        map.fitBounds(bounds);
      }
</script>

<div id="right-panel">
  <h2 id="h2">Results</h2>
  <ul id="places"></ul>
  <button id="more">More results</button>
</div>


<br><br> 
<?php  
   include('includes/footer.php');
?> 

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_eBixPALw4D21f5kyHk42YqvLhAfC-NU&libraries=places&callback=initMap" async defer></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>