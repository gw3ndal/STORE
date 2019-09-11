<?php
function display_produit($id, $offset, $limite){
	global $pdo;
	// var_dump ($pdo);
	try {
		

		$query= "SELECT * 
					FROM `st_products`,st_products_has_st_categories,st_categories 
					WHERE pro_id=st_products_pro_id 
					AND st_categories_cat_id=cat_id
					AND cat_id =:souscat
					LIMIT :offset, :limite";
		// die($query);
		//ENVOI de la requête
		$req = $pdo->prepare($query);
		//INITIALISATION des paramètres
		$req->bindParam(":souscat", $id, PDO::PARAM_INT);
		$req->bindParam(":offset", $offset, PDO::PARAM_INT);
		$req->bindParam(":limite", $limite, PDO::PARAM_INT);

        //EXÉCUTION de la requête        
		$req->execute();
		//RÉCUPÉRATION de tous les résultats
		$req->setFetchMode(PDO::FETCH_ASSOC);
		$categories = $req->fetchAll();
		echo "<pre>";
		print_r($categories);
		echo "</pre>";
		// var_dump($categories);exit;
		$req->closeCursor();
		//RETOUR de tous les articles sélectionnés
		return $categories;
	}catch (Exception $e) {
		// die("Erreur MySQL :". utf8_encode($e->getMessage()));
		return false;
	}
}