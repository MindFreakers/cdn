<?php
/* 
Google Analytics Plugin 2.5
Copyright (c) 2014 MindFreakers Networking
@author     : Sagar Gulati
@email      : sagar(a)mindfreakers(d)net
@version    : 2.0
@url        : http://api.mindfreakers.net/ajax/google/
@copyright  : MindFreakers Networking
*/

error_reporting(0);
header('Content-Type: text/javascript');
$id = $_GET['id'];
$domain = $_GET['domain'];
$type = $_GET['type'];

if (isset($id) && empty($id)) {
	echo "Please specify a tracking id";
       exit();
	}
elseif(isset($id)) {
if (!isset($domain)) {
	echo "Domain parameter missing";
       exit();
}
if (isset($domain) && empty($domain)) {
	echo "Please specify a domain";
       exit();
	}
elseif(isset($domain)) {
if (!isset($type)) {
	echo "Type parameter missing";
       exit();
}
if (isset($type) && empty($type)) {
	echo "Please specify type of script";
       exit();
	}
elseif ($type == "web") {
echo "<script type='text/javascript'>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '$id', '$domain');
  ga('send', 'pageview');
</script>
";
exit();
}
elseif ($type == "portable") {
echo "(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '$id', '$domain');
  ga('send', 'pageview');";
exit();
}
else { 
	echo "Invalid type parameter";
	exit();
	} 
  }
}
else {
	echo "Tracking ID, domain & type parameter missing.";
	exit();
     }
?>