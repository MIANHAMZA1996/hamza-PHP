<?php
  include('connection.php');
  $id=$_GET['id'];
  $q="SELECT * FROM quries WHERE id='$id'";
  $res=mysqli_query($conn,$q);
  $row=mysqli_fetch_object($res);
  

?>
<!DOCTYPE html>
<html>
<link rel="icon" href="logo.png">
<link rel="stylesheet" type="text/css" href="index.css">
<head>
  <title>
    BLOG SITE
  </title>
</head>
<body class="body" 
>

<?php
  include('header.php');
  include('connection.php');
?>  



<!-- Initialize Google Maps -->


<div class="container" style="float: right;">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <div id="map" style="width:200%;height:500px"></div>
    </div>
    <div class="column">
      <form action="updatecontact.php" method="POST">
        <label >First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name.." value="<?PHP echo $row->firstname ?>">
        <label >Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name.." value="<?PHP echo $row->lastname?>">
        <label >Mobile Number</label>
        <input type="text" id="lname" name="mnumber" placeholder="Enter your Mobile Number.." value="<?PHP echo $row->mnumber ?>">
        <label >Country</label>
        <select id="country" name="country" value="<?PHP echo $row->country ?>">
          <option value="AUSTRALIA">AUSTRALIA</option>
          <option value="UNITED KINDOM">UNITED KINDOM</option>
          <option value="SAUDIA ARABIA">SAUDIA ARAB</option>
          <option value="PAKISTAN">PAKISTAN</option>
          <option value="NEPAL">NEPAL</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px" value="<?PHP echo $row->subject ?>"></textarea>
        <input type="submit" value="Update">
      </form>
    </div>
  </div>

<script>
function myMap() {
  var myCenter = new google.maps.LatLng(31.4862251,74.3123815);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 12};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</div>




<div class="footer" > 

       &copy;Copyrights | MIAN HAMZA
</div>
</body>
</html>

