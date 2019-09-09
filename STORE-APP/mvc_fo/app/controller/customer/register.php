<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){ 

	define("PAGE_TITLE", "INSCRIPTION | Tœshï");
	include("../app/view/customer/register.php");

}else{

	// var_dump($_POST);
	include("../app/model/customer/add_cust.php");
	// var_dump($user);
	if(add_cust($_POST)){
		header("Location:index.php?notif=registered");
		}else{
			header("Location:index.php?module=customer&action=register&notif=nok");
		}
	}