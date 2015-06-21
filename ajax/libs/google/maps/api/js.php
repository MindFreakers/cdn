<?php
error_reporting(0);
header("Content-Type: text/javascript"); 
$value = $_GET['sensor'];
$url = "http://maps.google.com/maps/api/js?sensor={$value}";
$getapi = file_get_contents($url);
if (isset($_GET['sensor']) && $_GET['sensor'] == '') { echo $getapi; }
elseif (!isset($_GET['sensor'])) { echo $getapi; } 
elseif (isset($_GET['sensor'])) {
if(!@$getapi) { echo $getapi; }
else { echo $getapi; }
}
?>
