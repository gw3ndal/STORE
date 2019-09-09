<?php
function display_categories_by_product($id){
	global $pdo;
	// var_dump ($pdo);
	try {
		$query= "SELECT p.*, GROUP_CONCAT(DISTINCT c.cat_descr ORDER BY c.cat_descr DESC SEPARATOR ', ') AS categories
	 FROM st_products AS p
	 INNER JOIN st_products_has_st_categories AS pc ON p.pro_id = pc.st_products_pro_id
	 INNER JOIN  st_categories AS c ON pc.st_categories_cat_id = c.cat_id
	 WHERE p.pro_id=:id
	 GROUP BY p.pro_id, p.pro_title,p.pro_descr";
		// die($query);

		//ENVOI de la requête
		$req = $pdo->prepare($query);
		//INITIALISATION des paramètres
		$req->bindParam(":id", $id, PDO::PARAM_INT);
		//EXÉCUTION de la requête
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