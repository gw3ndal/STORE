<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
   include ("../app/model/product/read_nb_pro.php");
   include ("../app/model/product/display_probycat.php");

   $nb_products = read_nb_pro($_GET["id"]);
   $pages = ceil($nb_products / NB_PAR_PAGE);

   if(isset($_GET["page"])){
      $page_demandee = $_GET["page"];
      if ($_GET["page"] > $pages){
         $page_demandee = $pages;
      }
      if ($_GET["page"] <= 0){
      $page_demandee = 1;
      }
   }else{
      $page_demandee = 1;  
   }

   $offset = ($page_demandee - 1) * NB_PAR_PAGE;
   $procatal = display_produit($_GET["id"],$offset,NB_PAR_PAGE);
//  if ($procatal){
//     var_dump($procatal);
//  } else{
//     die("ERREUR");
//  }

   if(!empty($procatal)){
      define("PAGE_TITLE", "Catalogue de nos chocolats ".$procatal[0]['cat_descr']." | ".SITE_NAME);
   }
   include ("../app/view/product/productsbycat.php");
} else {
	// die($_POST);
   include("../app/model/checkout/ajoutarticle.php");
   // var_dump($user);
   if (ajoutarticle($_POST)) {
      header("Location:".$_SERVER['HTTP_REFERER']);
      
   } else {
      header("Location:?error=notadd");
   }
}