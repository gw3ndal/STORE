<?php
function check_login($form){
	global $pdo;
	// var_dump ($pdo);
	try {
		$query="SELECT *
					FROM st_customers
					WHERE cus_mail=:login
						AND cus_password=:password";
		// die($query);

		//ENVOI de la requête
		$req = $pdo->prepare($query);
		//INITIALISATION des paramètres
		$req->bindParam(":login", $form["cus_mail"], PDO::PARAM_STR);
		$req->bindParam(":password", md5($form["cus_password"]), PDO::PARAM_STR);
		//EXÉCUTION de la requête
		$req->execute();
		//RÉCUPÉRATION de tous les résultats
		$req->setFetchMode(PDO::FETCH_ASSOC);
		$data = $req->fetch();
		// var_dump($data);exit;
		$req->closeCursor();
		if($data){

		}
		//RETOUR de tous les articles sélectionnés
		return $data;
	 }catch (Exception $e) {
		// die("Erreur MySQL :". utf8_encode($e->getMessage()));
		return false; //soit USER pas trouvé soit erreur SQL
		//return "catch" // USER non trouvé
	}
}