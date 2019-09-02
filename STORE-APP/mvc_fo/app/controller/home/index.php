<?php
include ("../app/model/home/new_products.php");
$newProducts = read_newPro();
include ("../app/model/home/slider_categories.php");
$categories = display_cat();
define("PAGE_TITLE", "Découvrez le meilleur chicoula d'ici et d'ailleurs | Tœshï");
include ("../app/view/home/index.php");