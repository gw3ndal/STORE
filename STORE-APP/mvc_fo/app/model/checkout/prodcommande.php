<?php
function prodcommande($order,$caddie)
{
    $i=0;
    global $pdo;
    // var_dump ($pdo);
   
    try {
        $user = $_SESSION["user"]["cus_id"] ?? 0;
            // die('cocu');
            $query = "INSERT INTO `st_orders_lines` (`st_orders_ord_id`, `st_products_pro_id`, `ord_lines_qt`, `ord_lines_price`)
            VALUES (:id, :pro_id, :qte, :price)";
        // die($query);

        //ENVOI de la requête
        $req = $pdo->prepare($query);
        //INITIALISATION des paramètres
        $req->bindParam(":id", $order, PDO::PARAM_INT);
        $req->bindParam(":pro_id", $caddie[$i]['pro_id'], PDO::PARAM_INT);
        $req->bindParam(":qte", $caddie[$i]['cad_qt'], PDO::PARAM_INT);
        $req->bindParam(":price", $caddie[$i]['price'], PDO::PARAM_INT);        
        //EXÉCUTION de la requête
        $req->execute();
        
        //RÉCUPÉRATION de tous les résultats
        // $req->setFetchMode(PDO::FETCH_ASSOC);
        // $data = $req->fetch();
        // var_dump($data);exit;
        // $req->closeCursor();
        // if($data){
        //RETOUR de tous les articles sélectionnés
        return true;
    } catch (Exception $e) {
        die ("SQL Erreur : " . utf8_encode($e->getMessage()));
        // die("Erreur MySQL :". utf8_encode($e->getMessage()));
        return false; //soit USER pas trouvé soit erreur SQL
        //return "catch" // USER non trouvé
    }
}
