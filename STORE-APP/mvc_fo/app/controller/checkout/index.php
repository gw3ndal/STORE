<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    include("../app/model/checkout/function_panier.php");
	include("../app/model/checkout/read_address.php");
	

	$read_add=read_address($_SESSION["user"]["cus_id"]);
	$erreur = false;
	  
	$fait = (isset($_POST['fait'])? $_POST['fait']:  (isset($_GET['fait'])? $_GET['fait']:null )) ;
	  if($fait !== null)
	  {
		 if(!in_array($fait,array('ajout', 'suppression', 'refresh','deletepanier')))
		 $erreur=true;
	  
		 //récuperation des variables en POST ou GET
		 $pro_id = (isset($_POST['pro_id'])? $_POST['pro_id']:  (isset($_GET['pro_id'])? $_GET['pro_id']:null )) ;  
		 $qte = (isset($_POST['qte'])? $_POST['qte']:  (isset($_GET['qte'])? $_GET['qte']:null )) ; 
	  }
	  
	  if (!$erreur){
		 switch($fait){
			Case "ajout":
			if (isset($_SESSION['user'])) {
				include("../app/model/checkout/ajoutarticle.php");
				$ajout=ajoutarticle($pro_id,$qte);
			}else {
				header("Location:index.php?action=customer&module=login");
			}
			
			break;
			
			Case "suppression":
			if (isset($_SESSION['user'])) {
				include("../app/model/checkout/suparticle.php");
				$sup=suparticle($pro_id);
				header("Location:".$_SERVER['HTTP_REFERER']);
			}else {
					header("Location:index.php?module=customer&action=login");
				}
			break;
			Case 'deletepanier':
				if (isset($_SESSION["user"]["cus_id"])) {
					include("../app/model/checkout/suppanier.php");
					suppanier($_SESSION["user"]["cus_id"]);
					header("Location:index.php?deletepanier=true
					");
				}
				break;
			Default:
			break;
		}
	  }  
	define("PAGE_TITLE", "Validez votre commande | Tœshï");
	include("../app/view/layout/header.inc.php");
	
	include("../app/view/checkout/index.php");
} else {
	// die($_POST);
    include("../app/model/checkout/ajoutarticle.php");
    // var_dump($user);
    if (ajoutarticle($_POST)) {
        header("Location:".$_SERVER['HTTP_REFERER']);
    } else {
        header("Location:?module=checkout&action=index&error=notadd");
    }
}
	