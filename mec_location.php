<!DOCTYPE html>
<html>
<body>


<button onclick="getLocation()">Trace the location</button>

<p id="demo"></p>

<script>
const x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
a=position.coords.latitude;
b=position.coords.longitude;
<?php $mla='a';?>
}

</script>
<php var_dump($mla); ?>

</body>
</html>