<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
include ("../app/model/product/display_catalogue.php");
$catalogue=display_catalogue($_GET["id"]);
include ("../app/model/product/display_cat.php");
$catal=display_catcatal($_GET["id"]);
include ("../app/model/product/display_probycat.php");
define("PAGE_TITLE", "Catalogue de nos chocolats par ".$catalogue["cat_main_descr"] ." | ".SITE_NAME);
include ("../app/view/product/catalogue.php");
}else {
    include("../app/model/checkout/ajoutarticle.php");
    if (ajoutarticle($_POST)) {
        header("Location:".$_SERVER['HTTP_REFERER']);
    } else {
        header("Location:?error=notadd");
    }
}