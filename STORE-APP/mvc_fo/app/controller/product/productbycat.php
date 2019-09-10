<?php

include ("../app/model/product/display_produit.php");
$procatal=display_produit($_GET["id"]);
if(!empty($procatal)){
    define("PAGE_TITLE", "Catalogue de nos chocolats ".$procatal[0]['cat_descr']." | ".SITE_NAME);
}
include ("../app/view/product/productsbycat.php");