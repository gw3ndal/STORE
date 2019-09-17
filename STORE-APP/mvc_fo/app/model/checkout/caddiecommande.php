<?php
function caddiecommande()
{
	$user = $_SESSION["user"]["cus_id"]??0;
	global $pdo;
	try {
		$query = "SELECT pro_price_euro*cad_qt as price,pro_title,pro_id,cad_qt,pro_price_euro,pro_subtitle1,pro_descr
					FROM st_caddies, st_products
					WHERE st_products_pro_id = pro_id
					AND st_customers_cus_id = :userid
                    ORDER BY pro_date DESC";
		$req = $pdo->prepare($query);
		$req->bindParam(":userid", $user, PDO::PARAM_INT);
		$req->execute();
		$req->setFetchMode(PDO::FETCH_ASSOC);
		$caddie = $req->fetchAll();
		//var_dump($data);
		$req->closeCursor();
		return $caddie;
	} catch (Exception $e) {
		die("Erreur MySQL :" . utf8_encode($e->getMessage()));
		return false;
	}
}

function caddiecommandetot()
{
	$user = $_SESSION["user"]["cus_id"]??0;
	global $pdo;
	try {
		$query = "SELECT SUM(pro_price_euro*cad_qt) AS total, SUM(cad_qt) as totalq
					FROM st_caddies, st_products
					WHERE st_products_pro_id = pro_id
					AND st_customers_cus_id = :userid";
		$req = $pdo->prepare($query);
		$req->bindParam(":userid", $user, PDO::PARAM_INT);
		$req->execute();
		$req->setFetchMode(PDO::FETCH_ASSOC);
		$total = $req->fetch();
		//var_dump($data);
		$req->closeCursor();
		return $total;
	} catch (Exception $e) {
		die("Erreur MySQL :" . utf8_encode($e->getMessage()));
		return false;
	}
}
