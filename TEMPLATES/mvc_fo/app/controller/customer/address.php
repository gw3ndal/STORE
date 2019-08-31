<?php
	include("../app/model/customer/edit_address.php");
	if(editAddress($_POST["add_id"])){
		header("Location:index.php?module=checkout&action=index&notif=modifiyed");
		}else{
			header("Location:index.php?module=checkout&action=index&notif=nok");