<?php
$WeatherSource = "https://api.forecast.io/forecast/7319746a2051f318f8321bf9436b1f95/" . $_GET["lat"] . "," . $_GET["lng"];
header("Content-Type: application/json");
header("Cache-Control: no-cache");
readfile($WeatherSource);
?>