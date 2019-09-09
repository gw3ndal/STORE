<?php
include ("../app/model/product/display_pictures.php");
$pics=display_pictures($_GET["id"]);

define("PAGE_TITLE", "Photos ".$pics["pro_title"] ." | ".SITE_NAME);
include ("../app/view/product/gallery.php");