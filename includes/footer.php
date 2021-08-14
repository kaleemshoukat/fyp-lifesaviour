<footer class="col-md-12 blog-footer bg-dark"> 
  <div class="row">
    <div class="col-md-6" style="padding-left: 100px;">
      <center>
      <p>Developed by Kaleem Shoukat & Iqra Anwar</p>
      <p>Life Saviour Copyright &copy; 2019</p>
      <p>
        <a href="home.php">Back to top (Home)</a><br>
        <a href="#" onclick="FBInvite()">Invite Facebook Friends</a>
      </p>
      </center>  
    </div>
    <div class="col-md-3" style="padding-left: 100px;">
      <h4>Contact us</h4>
      0335-1441256<br>
      kaleemshoukat96@gmail.com<br>
      0334-2233124<br>
      iqraanwar565@gmail.com
    </div>
  </div>
  

<script src="http://connect.facebook.net/en_US/all.js"></script>

<script>
 FB.init({
  appId:'app_id',
  cookie:true,
  status:true,
  xfbml:true
 });
</script>
<script>
 function FBInvite(){
  FB.ui({
   method: 'apprequests',
   message: 'Invite your Facebook Friends'
  },function(response) {
   if (response) {
    alert('Successfully Invited');
   } else {
    alert('Failed To Invite');
   }
  });
 }
</script>

</footer>