<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){ 

	define("PAGE_TITLE", "Connectez-vous | Tœshï");
	include("../app/view/customer/login.php");

}else{

	// var_dump($_POST);
	include("../app/model/customer/check_login.php");
	$user=check_login($_POST);
	// var_dump($user);
	if($user){
		$_SESSION["user"]=$user;
		header("Location:index.php?notif=ok");
		}else{
			header("Location:index.php?module=customer&action=login&notif=nok");
		}
	}

