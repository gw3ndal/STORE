<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
include ("../app/model/product/display_chocolate.php");
$data=display_chocolate($_GET["id"]);
include ("../app/model/product/display_categories_by_product.php");
$categories=display_categories_by_product($_GET["id"]);
define("PAGE_TITLE", "Tablette chocolat ".$data[0]["pro_title"] ." | ".SITE_NAME);
include ("../app/view/product/product.php");
}else {
    include("../app/model/checkout/ajoutarticle.php");
    if (ajoutarticle($_POST)) {
        header("Location:".$_SERVER['HTTP_REFERER']);
    } else {
        header("Location:?error=notadd");
    }
}