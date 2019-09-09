<?php

include ("../app/model/product/display_catalogue.php");
$catalogue=display_catalogue($_GET["id"]);
include ("../app/model/product/display_cat.php");
$catal=display_catcatal($_GET["id"]);
include ("../app/model/product/display_produit.php");
define("PAGE_TITLE", "Catalogue de nos chocolats par ".$catalogue["cat_main_descr"] ." | ".SITE_NAME);
include ("../app/view/product/index.php");