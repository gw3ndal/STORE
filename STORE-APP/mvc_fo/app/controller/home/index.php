<?php
include ("../app/model/home/new_products.php");
$newproducts=lire_new_produit();
// include ("../app/model/home/categorie.php");
// $newcat=lire_categorie();
define("PAGE_TITLE", "Découvrez le meilleur chicoula d'ici et d'ailleurs | Tœshï");
include ("../app/view/home/index.php");