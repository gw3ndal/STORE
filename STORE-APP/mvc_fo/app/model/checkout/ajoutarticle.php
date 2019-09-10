<?php
function ajoutarticle($form)
{

    global $pdo;
    // var_dump ($pdo);
    try {
        $user = $_SESSION["user"]["cus_id"] ?? 0;
        $pri = " SELECT COUNT(*) FROM st_caddies WHERE st_products_pro_id =:libel AND st_customers_cus_id=:id";
        $compt = $pdo->prepare($pri); // Préparation de la requète qui va compter combien de fois la valeur de la liste[0] est présente dans la base
        $compt->bindParam(":id", $user, PDO::PARAM_INT);
        $compt->bindParam(":libel", $form['productId'], PDO::PARAM_INT);
        $compt->execute();
        $donnees = $compt->fetch();
        $num = (int)$donnees[0];var_dump($num);
        if ( $num> 0) {
            // die($num);
            $query = "UPDATE st_caddies 
                SET cad_qt = :qte
                WHERE `st_caddies`.`st_customers_cus_id` = :id 
                AND `st_caddies`.`st_products_pro_id` = :libel";
                
        } else {
            // die('cocu');
            $query = "INSERT INTO `st_caddies` (`st_customers_cus_id`, `st_products_pro_id`, `cad_qt`, `cad_date`)
                    VALUES (:id, :libel, :qte, CURRENT_TIMESTAMP)";
        }


        // die($query);

        //ENVOI de la requête
        $req = $pdo->prepare($query);
        //INITIALISATION des paramètres
        $req->bindParam(":id", $user, PDO::PARAM_INT);
        $req->bindParam(":libel", $form['productId'], PDO::PARAM_INT);
        $req->bindParam(":qte", $form['qte'], PDO::PARAM_INT);
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
