<?php
if (!isset($_SESSION)) {
  session_start();
}
$_SESSION['MessageOFF']="Erreur 404<br>";
$start=true;
$convertimage=true;
$zipcode=true;
$bkA=false;
$bkR=false;
$typeid=false;
$atmO=false;
$securcode=true;

?>