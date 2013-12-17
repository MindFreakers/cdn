<?php
   error_reporting(0);
   header("Content-Type: text/css"); 
   if (isset($_GET['family']) && $_GET['family'] == '') { echo "Please specify a font"; }
   elseif (!isset($_GET['family'])) { echo "404 Not Found"; } 
   elseif (isset($_GET['family'])) {
   $fontname = $_GET['family'];
   $font = urlencode("{$fontname}" );
   $plus = str_replace('+', ' ', $font);
   echo "@font-face {
   	font-family: '{$plus}';
        src: url('libs/{$plus}.eot');
        src: local('?'), url('libs/{$plus}.woff') format('woff'), url('libs/{$plus}.ttf') format('truetype'), url('libs/{$plus}.svg') format('svg');
   	font-weight: normal;
   	font-style: normal;
   }";
   }
   
   ?>