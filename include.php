<?php

echo "
<html lang='en'>
<head>
<title>Felix</title>
";
	session_start();
	include ('bd/connexionDB.php');
	include ('_function/domaine.php');
	include ('_function/guid.php');
	include ('_function/password.php');
	include ('_function/user.php');
	include ('_function/online.php');
	include ('_function/visiteur.php');
	include ('_function/mail.php');
	include ('_function/insulte.php');
	include ('_function/time.php');
	include ('_function/image.php');
	include ('_function/Video.php');
	
	include('library/vendor/autoload.php');
	
	use \Defuse\Crypto\Crypto;
	use \Defuse\Crypto\Key;
	
	$__Secret__key = "votreclé";
	
	$__Domain 			= new Domain;
	$__Crypto 			= new Crypto;
	$__Crypt_password 	= new Password;
	$__Visiteur 		= new Visiteur;
	$__User				= new User;
	$__Online			= new Online;
	$__GUID 			= new Guid;
	$__Email			= new Email;
	$__Time				= new Time;
	$__Image			= new Image;
	$__Insulte			= new Insulte;
	
	define("URL", $__Domain->domain());
	define("CURRENT_URL",  $__Domain->current_url());
	
	$__Visiteur->check_visiteur();
	
	$__Online->online();

	include ('_head/meta.php');
	include ('_head/link.php');
	include ('_head/script.php');
	include ('_function/notification.php');
	$__Notification 	= new Notification;
	$__Notification->notification();
	echo "<head>";
?>