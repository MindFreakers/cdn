<?php
/*!
 * Alexa Site Stats Widget Loader v1.0
 * version: 1.0 (06-11-2014)
 * Build with php 5.4.x
 * Requires php 5.4+ or later
 * Copyright (c) 2014 MindFreakers Networking
 * Author: Sagar Gulati
 * Email: sagar(at)mindfreakers(dot)net
 * Dual licensed under the MIT and GPL licenses.
 */

function file_get_contents_curl($url) {
    $ch = curl_init();
    $agent = $_SERVER['HTTP_USER_AGENT'];

    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, FALSE);       
    curl_setopt($ch,CURLOPT_USERAGENT,$agent);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}


error_reporting(0);
header("Content-Type: text/javascript"); 
$url = $_GET['url'];
$alexaurl = "http://xslt.alexa.com/site_stats/js/t/b?url=";
if (isset($url) && !empty($url))
{ 
$script = file_get_contents_curl($alexaurl.$url);
echo $script;
}
else {
$script = file_get_contents_curl($alexaurl);
echo $script;
}
?>
