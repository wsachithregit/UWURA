 <!DOCTYPE html>
<html>
<title>UWU RA Add Resource</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.mySlides {display:none}
</style>
<body>


<div class="w3-content">

<h1 align="center">Vehicle Information</h1>

 <div class="col-sm-3">

<img src="assets/img/Vehicle.png" width="250" height="250">
<br>
</div>

<div class="col-sm-6">
<br>
<div style="border:thin" col-2>

<form action="PassVehicle.php" class="w3-container w3-light-grey" method="post">
 
    <p>
    <label for="textfield">Select Vecicle ID:</label>
    <select class="form-control" id="vehicleID" name="vehicleID">
	<?php
	mysql_connect('localhost','root','');
	mysql_select_db('uwuresources');
	$sql = "SELECT * FROM resource WHERE resourcecategory='Vehicle'";
	$result = mysql_query($sql);
	
	while($row = mysql_fetch_array($result)){
	echo "<option value=".$row['resourceID'].">".$row['resourceID']."</option>";
	}
	?>	
    
    </select>
    </p>

    <p>
	<label for="textfield5">Vehicle Category</label>
    
    <select class="form-control" id="category" name="category">
    <option value="Threewheel">Threewheel</option>
    <option value="Car">Car</option>
    <option value="8 Seat Van">8 Seat Van</option>
    <option value="14 Seat Van">14 Seat Van</option>
    <option value="Crew Cab">Crew Cab</option>
    <option value="54 Seat Bus">54 Seat Bus</option>
    <option value="AC Bus">AC Bus</option>
    </select>
    </p>
    <p>
	<label for="textfield5">Vehicle Number</label>
    <input type="text" class="form-control" name="vehiclenumber" id="vehiclenumber" placeholder="Enter vehicle category" required>


    </p>


    
    <input type="submit" name="submit" id="submit" value="Add Vehicle" class="w3-btn w3-orange">
  </form>
</div>
    <br>
    </div> 
    </div>
    </body>
    
          
 

<script>
// Script to open and close sidebar when on tablets and phones
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Slideshow Apartment Images
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>

</body>
</html>
