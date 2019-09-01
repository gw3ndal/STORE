<?php
define("PAGE_TITLE", "Catalogue de nos variétés de chocolat | Tœshï");
include ("../app/view/product/index.php");
include ("../app/model/product/display_catalogue.php");
$catalogue = display_catalogue();