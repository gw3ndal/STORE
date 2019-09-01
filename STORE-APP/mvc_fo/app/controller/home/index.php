<?php
include ("../app/model/home/new_products.php");
$newProducts = read_newPro();
define("PAGE_TITLE", "Découvrez le meilleur chicoula d'ici et d'ailleurs | Tœshï");
include ("../app/view/home/index.php");