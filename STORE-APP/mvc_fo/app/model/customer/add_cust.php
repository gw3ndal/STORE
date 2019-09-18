<?php
function add_cust($form, $token){
	global $pdo;
	// var_dump ($pdo);
	try {
		$query="INSERT INTO st_customers
		(cus_mail, cus_password, cus_civility, cus_lastname, cus_firstname, cus_token)       
	  
				VALUES (:mail, :password, :civility, :lastname, :firstname, :cus_token)";
							
		// die($query);

		//ENVOI de la requête
		$req = $pdo->prepare($query);
		//INITIALISATION des paramètres
		$pass=md5($form["cus_password"]);
		$req->bindParam(":mail", $form["cus_mail"], PDO::PARAM_STR);
		$req->bindParam(":password", $pass, PDO::PARAM_STR);
		$req->bindParam(":civility", $form["cus_civility"], PDO::PARAM_STR);
		$req->bindParam(":lastname", $form["cus_lastname"], PDO::PARAM_STR);
		$req->bindParam(":firstname", $form["cus_firstname"], PDO::PARAM_STR);
		$req->bindParam(":cus_token", $token, PDO::PARAM_STR);
		//EXÉCUTION de la requête
		$req->execute();
		//RÉCUPÉRATION de tous les résultats
		// $req->setFetchMode(PDO::FETCH_ASSOC);
		// $data = $req->fetch();
		// var_dump($data);exit;
		// $req->closeCursor();
		// if($data){

		//RETOUR de tous les articles sélectionnés
		// return true;

		$cus_id = $pdo->lastInsertId();


		$query="INSERT INTO st_addresses
		(st_customers_cus_id, add_address1, add_address2, add_zipcode, add_city)       
	  
				VALUES ($cus_id, :address1, :address2, :zipcode, :city)";
		$req = $pdo->prepare($query);

		$req->bindParam(":address1", $form["add_address1"], PDO::PARAM_STR);
		$req->bindParam(":address2", $form["add_address2"], PDO::PARAM_STR);
		$req->bindParam(":zipcode", $form["add_zipcode"], PDO::PARAM_STR);
		$req->bindParam(":city", $form["add_city"], PDO::PARAM_STR);

		$req->execute();

		return true;
	 }catch (Exception $e) {
		return false;
	}
}