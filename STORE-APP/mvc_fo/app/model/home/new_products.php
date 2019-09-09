<?php
	function lire_new_produit(){
        global $pdo;
	try {
		$query= "SELECT pro_price_euro*cad_qt as price,pro_title,pro_id,cad_qt,pro_price_euro,pro_subtitle1,pro_descr
		FROM st_caddies, st_products
		WHERE st_products_pro_id = pro_id
                    ORDER BY pro_date DESC
                    LIMIT 3";
		$req = $pdo->query($query);
		$req->setFetchMode(PDO::FETCH_ASSOC);
		$newproducts = $req->fetchAll();
		//var_dump($data);
		$req->closeCursor();
		return $newproducts;
	 }catch (Exception $e) {
		// die("Erreur MySQL :". utf8_encode($e->getMessage()));
		return false;
	}
	}