<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
include ("../app/model/home/new_products.php");
$newProducts = read_newPro();

// die($_POST);
include("../app/model/checkout/ajoutarticle.php");
// var_dump($user)
// include ("../app/model/home/slider_categories.php");
// $categories = display_cat();
define("PAGE_TITLE", "Découvrez le meilleur chicoula d'ici et d'ailleurs | ".SITE_NAME);
include ("../app/view/home/index.php");
}else {
    include("../app/model/checkout/ajoutarticle.php");
    if (ajoutarticle($_POST)) {
        header("Location:".$_SERVER['HTTP_REFERER']);
    } else {
        header("Location:?error=notadd");
    }
}