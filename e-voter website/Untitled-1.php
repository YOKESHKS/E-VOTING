<!DOCTYPE html > 
<head > 
<meta charset=utf-8 /> 
<title>Digital Clock</title> 
<style type="text/css"> 
 
body  
{ 
background-color: #800020;  
color:#6DF3D1;  
margin: 30px; 
} 
 
#clock  
{ 
margin: 20px;  
padding: 20px;  
width:400px;  
border: medium dotted pink; 
font-size: 50pt;   
} 
</style> 
</head> 
 
<body> 
 
<h1> DIGITAL CLOCK</h1> 
 
<hr /> 
 
<?php 
date_default_timezone_set('Asia/Kolkata'); 
$page = $_SERVER['PHP_SELF']; 
 $sec = "1"; 
 header("Refresh: $sec; url=$page"); 
?>
<div id="clock"><?php echo idate("H") . " : ". idate("i"). " : ". idate("s");  
usleep (100);?> </div> 
 
</body> 
</html>