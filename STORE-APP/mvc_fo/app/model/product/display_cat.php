<?php
function display_catcatal($id){
	global $pdo;
	// var_dump ($pdo);
	try {
		$query= "SELECT * FROM st_categories_main,`st_categories_main_has_st_categories`,st_categories 
		WHERE cat_main_id=st_categories_main_cat_main_id
		AND st_categories_cat_id=cat_id
		AND cat_main_id=:id";
		// die($query);

		//ENVOI de la requête
		$req = $pdo->prepare($query);
		//INITIALISATION des paramètres
		//EXÉCUTION de la requête
		$req->bindParam(":id", $id, PDO::PARAM_INT);

		$req->execute();
		//RÉCUPÉRATION de tous les résultats
		$req->setFetchMode(PDO::FETCH_ASSOC);
		$categories = $req->fetchAll();
		// var_dump($categories);exit;
		$req->closeCursor();
		//RETOUR de tous les articles sélectionnés
		return $categories;
	 }catch (Exception $e) {
		// die("Erreur MySQL :". utf8_encode($e->getMessage()));
		return false;
	}
}