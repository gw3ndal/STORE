<?php


include ("../app/model/product/display_catalogue.php");
$catalogue=display_catalogue($_GET["id"]);
include ("../app/model/product/display_cat.php");
$data_cat=display_cat($_GET["id"]);
include ("../app/model/product/display_pro.php");
$data_pro=display_pro($data_cat);

define("PAGE_TITLE", "Catalogue de nos chocolats par ".$catalogue["cat_main_descr"] ." | ".SITE_NAME);
include ("../app/view/product/index.php");

