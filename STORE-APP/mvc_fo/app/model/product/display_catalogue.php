<?php
function display_catalogue($offset, $limite){
	global $pdo;
	// var_dump ($pdo);
	try {
		$query= "SELECT *
					FROM st_categories_main_has_st_categories, st_categories, st_categories_main, st_products
					WHERE st_products_pro_id=pro_id
						AND st_categories_cat_id=cat_id
						AND st_categories_main_id=4
					LIMIT :offset, :limite";
		// die($query);

		//ENVOI de la requête
		$req = $pdo->prepare($query);
		//INITIALISATION des paramètres
		$req->bindParam(":offset", $offset, PDO::PARAM_INT);
		$req->bindParam(":limite", $limite, PDO::PARAM_INT);
		//EXÉCUTION de la requête
		$req->execute();
		//RÉCUPÉRATION de tous les résultats
		$req->setFetchMode(PDO::FETCH_ASSOC);
		$catalogue = $req->fetchAll();
		// var_dump($data);exit;
		$req->closeCursor();
		//RETOUR de tous les articles sélectionnés
		return $catalogue;
	 }catch (Exception $e) {
		// die("Erreur MySQL :". utf8_encode($e->getMessage()));
		return false;
	}
}