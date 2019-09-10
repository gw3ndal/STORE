<?php
function display_produit($souscat){
	global $pdo;
	// var_dump ($pdo);
	try {
		$query= "SELECT * FROM `st_categories`,st_products
					WHERE cat_descr=pro_subtitle3
                    AND cat_id =:souscat
					LIMIT 6";
		// die($query);
		//ENVOI de la requête
		$req = $pdo->prepare($query);
		//INITIALISATION des paramètres
        //EXÉCUTION de la requête
        $req->bindParam(":souscat", $souscat, PDO::PARAM_INT);
        
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