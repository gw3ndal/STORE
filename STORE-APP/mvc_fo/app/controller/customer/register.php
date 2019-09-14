<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){ 

	define("PAGE_TITLE", "INSCRIPTION | Tœshï");
	include("../app/view/customer/register.php");

}else{
	// var_dump($_POST);
	$token = md5(uniqid(mt_rand()));
	include("../app/model/customer/add_cust.php");
	// var_dump($user);
	if(add_cust($_POST, $token)){
		include_once("../lib/mail.class.php");
		try{
			$email= new phpMail(MAIL_EXPE, NOM_EXPE, MAIL_EXPE);
			$email->add_destinataire($_POST['cus_mail']);
			
			// $html=file_get_contents("../app/view/utilisateur/valide.mail.html");
			include("../app/view/customer/valide.mail.html");
			// $html="<b>Bienvenu</b>"
			$email->contenu("Confirmation d'inscription | TŒSHĪ", "", $html);
			$email->envoyer();
	   }catch (Exception $e){
		   // echo "Problème";
		   echo $e->getMessage();
		   echo $e->getCode();
	   }   
		header("Location:index.php?module=customer&action=validation");
		}else{
			header("Location:index.php?module=customer&action=register&notif=nok");
		}
	}