<?php
	include("../app/model/checkout/read_address.php");
	  $read_add=read_address($_SESSION["user"]["cus_id"]);

	define("PAGE_TITLE", "Validez et Commandez");
	include("../app/view/checkout/index.php");