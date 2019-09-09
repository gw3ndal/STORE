<?php
include ("../app/model/product/display_chocolate.php");
$data=display_chocolate($_GET["id"]);
include ("../app/model/product/display_categories_by_product.php");
$categories=display_categories_by_product($_GET["id"]);

define("PAGE_TITLE", "Tablette chocolat ".$data["pro_title"] ." | ".SITE_NAME);
include ("../app/view/product/product.php");