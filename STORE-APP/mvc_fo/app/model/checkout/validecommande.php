<?php
function validecommande($form)
{

    global $pdo;
    // var_dump ($pdo);
    try {
        $user = $_SESSION["user"]["cus_id"] ?? 0;
            // die('cocu');
            $query = "INSERT INTO `st_orders` (`ord_id`, `st_customers_cus_id`, `st_types_of_logistics_typ_log_id`, `st_address_billing`, `st_address_delivery`, `ord_total`, `ord_qt`) 
            VALUES (NULL, :id, :logi, :adress1, :adress2, :price, :qte);";
        // die($query);

        //ENVOI de la requête
        $req = $pdo->prepare($query);
        //INITIALISATION des paramètres
        $req->bindParam(":id", $user, PDO::PARAM_INT);
        $req->bindParam(":qte", $form['totalq'], PDO::PARAM_INT);
        $req->bindParam(":price", $form['total'], PDO::PARAM_INT);  
        $req->bindParam(":adress1", $form['add1'], PDO::PARAM_INT);  
        $req->bindParam(":adress2", $form['add2'], PDO::PARAM_INT); 
        $req->bindParam(":logi", $form['logistic_type'], PDO::PARAM_INT);  
        //EXÉCUTION de la requête
        $req->execute();
        $last_id= $pdo->lastInsertId();
        //RÉCUPÉRATION de tous les résultats
        // $req->setFetchMode(PDO::FETCH_ASSOC);
        // $data = $req->fetch();
        // var_dump($data);exit;
        // $req->closeCursor();
        // if($data){
        //RETOUR de tous les articles sélectionnés
        return $last_id;
    } catch (Exception $e) {
        die ("SQL Erreur : " . utf8_encode($e->getMessage()));
        // die("Erreur MySQL :". utf8_encode($e->getMessage()));
        return false; //soit USER pas trouvé soit erreur SQL
        //return "catch" // USER non trouvé
    }
}
