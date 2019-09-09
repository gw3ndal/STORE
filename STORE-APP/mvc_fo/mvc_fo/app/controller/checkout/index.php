<?php
	include("../app/model/checkout/read_address.php");
	  $read_add=read_address($_SESSION["user"]["cus_id"]);

	define("PAGE_TITLE", "Validez et Commandez | Tœshï");
	include("../app/view/checkout/index.php");