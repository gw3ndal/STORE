<?php
if(isset($_GET["token"]))
{
	include("../app/model/customer/confirm.php");

	if(confirm($_GET["token"])){
		header("Location:?module=customer&action=login");
	}else{
	header("Location:?notif=nok");
}
}else{
	die("Accès refusé");
}