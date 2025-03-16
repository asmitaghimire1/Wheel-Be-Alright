<!DOCTYPE html>
<html>
<body>



<p id="demo"></p>

<script onload=getlocation();>
  
const x = document.getElementById("demo");



function getLocation() {
  document.write(5+6);
  if (navigator.geolocation) {
    navigator.geolocation.watchPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
 
    x.innerHTML="Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
    const cla=position.coords.latitude;
    const clo=position.coords.longitude;
}
</script>

</body>
</html>