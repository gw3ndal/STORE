<?php
function display_pro($id_catalogue){
	global $pdo;
	// var_dump ($pdo);
	try {
		$query = "SELECT p.*, GROUP_CONCAT(DISTINCT c.cat_descr ORDER BY c.cat_descr DESC SEPARATOR ', ') AS categories
    FROM st_products AS p
    INNER JOIN st_products_has_st_categories AS pc ON p.pro_id = pc.st_products_pro_id
    INNER JOIN  st_categories AS c ON pc.st_categories_cat_id = c.cat_id
    GROUP BY p.pro_id, p.pro_title,p.pro_descr";
		// die($query);

		//ENVOI de la requête
		$req = $pdo->prepare($query);
		// $req->bindParam(":st_categories_cat_id", $display_cat, PDO::PARAM_INT);
		//EXÉCUTION de la requête
		$req->execute();
		//RÉCUPÉRATION de tous les résultats
		$req->setFetchMode(PDO::FETCH_ASSOC);
		$data_pro = $req->fetchAll();
		// var_dump($data_pro);exit;
		$req->closeCursor();
		//RETOUR de tous les articles sélectionnés
		return $data_pro;
	 }catch (Exception $e) {
		// die("Erreur MySQL :". utf8_encode($e->getMessage()));
		return false;
	}
}