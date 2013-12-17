<?php
error_reporting(0);
header("Content-Type: text/css"); 
if (isset($_GET['family']) && $_GET['family'] == '') { echo "Please specify a font"; }
elseif (!isset($_GET['family'])) { echo "404 Not Found"; } 
elseif (isset($_GET['family'])) {
$fontname = $_GET['family'];
$font = urlencode("{$fontname}") ;
$url = "http://fonts.googleapis.com/css?family={$font}";
$getcss = file_get_contents($url);
if(!@$getcss) { echo "Invalid Font."; }
else { echo $getcss; }
}
?>