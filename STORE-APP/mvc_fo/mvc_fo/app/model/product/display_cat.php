<?php
function display_cat($id_catalogue){
	global $pdo;
	// var_dump ($pdo);
	try {
		$query= "SELECT *
					FROM st_categories, st_categories_main_has_st_categories
					WHERE cat_id=st_categories_cat_id
						AND st_categories_main_cat_main_id=:cat_main_id";
		// die($query);

		//ENVOI de la requête
		$req = $pdo->prepare($query);
		$req->bindParam(":cat_main_id", $id_catalogue, PDO::PARAM_INT);
		//EXÉCUTION de la requête
		$req->execute();
		//RÉCUPÉRATION de tous les résultats
		$req->setFetchMode(PDO::FETCH_ASSOC);
		$data_cat = $req->fetchAll();
		// var_dump($data_cat);exit;
		$req->closeCursor();
		//RETOUR de tous les articles sélectionnés
		return $data_cat;
	 }catch (Exception $e) {
		// die("Erreur MySQL :". utf8_encode($e->getMessage()));
		return false;
	}
}