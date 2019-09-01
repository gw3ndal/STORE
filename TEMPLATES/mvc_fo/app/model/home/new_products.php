<?php
function read_newPro(){
	global $pdo;
	// var_dump ($pdo);
	try {
		$query= "SELECT *
					FROM st_products
					ORDER BY pro_date DESC
					LIMIT 3";
		// die($query);

		//ENVOI de la requête
		$req = $pdo->prepare($query);
		//INITIALISATION des paramètres
		//EXÉCUTION de la requête
		$req->execute();
		//RÉCUPÉRATION de tous les résultats
		$req->setFetchMode(PDO::FETCH_ASSOC);
		$newProducts = $req->fetchAll();
		// var_dump($data);exit;
		$req->closeCursor();
		//RETOUR de tous les articles sélectionnés
		return $newProducts;
	 }catch (Exception $e) {
		// die("Erreur MySQL :". utf8_encode($e->getMessage()));
		return false;
	}
}