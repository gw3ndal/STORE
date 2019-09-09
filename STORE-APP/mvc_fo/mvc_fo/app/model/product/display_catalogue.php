<?php
function display_catalogue($id){
	global $pdo;
	// var_dump ($pdo);
	try {
		$query= "SELECT *
					FROM st_categories_main
					-- , st_categories_main_has_st_categories, st_categories
						WHERE cat_main_id=:id
						-- AND cat_main_id=st_categories_main_cat_main_id
						-- AND cat_id=st_categories_cat_id
					-- , 
					-- WHERE A.cat_main_id=B.st_categories_cat_main_id
					-- 	AND B.st_categories_cat_id=C.cat_id
					-- 	AND D.st_products_pro_id=E.pro_id
						
					-- LIMIT :offset, :limite";
		// die($query);

		//ENVOI de la requête
		$req = $pdo->prepare($query);
		//INITIALISATION des paramètres
		$req->bindParam(":id", $id, PDO::PARAM_INT);
		// $req->bindParam(":limite", $limite, PDO::PARAM_INT);
		//EXÉCUTION de la requête
		$req->execute();
		//RÉCUPÉRATION de tous les résultats
		$req->setFetchMode(PDO::FETCH_ASSOC);
		$catalogue = $req->fetch();
		// var_dump($catalogue);exit;
		$req->closeCursor();
		//RETOUR de tous les articles sélectionnés
		return $catalogue;
	 }catch (Exception $e) {
		// die("Erreur MySQL :". utf8_encode($e->getMessage()));
		return false;
	}
}