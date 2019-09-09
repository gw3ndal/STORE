<?php
function display_pictures($id){
	global $pdo;
	// var_dump ($pdo);
	try {
		$query= "SELECT pro_img_url_recto, pro_img_url_verso, pro_title, pro_id
					FROM st_products
					WHERE pro_id=:id";
		// die($query);

		//ENVOI de la requête
		$req = $pdo->prepare($query);
		//INITIALISATION des paramètres
		$req->bindParam(":id", $id, PDO::PARAM_INT);
		//EXÉCUTION de la requête
		$req->execute();
		//RÉCUPÉRATION de tous les résultats
		$req->setFetchMode(PDO::FETCH_ASSOC);
		$pics = $req->fetch();
		// var_dump($pics);exit;
		$req->closeCursor();
		//RETOUR de tous les articles sélectionnés
		return $pics;
	 }catch (Exception $e) {
		// die("Erreur MySQL :". utf8_encode($e->getMessage()));
		return false;
	}
}