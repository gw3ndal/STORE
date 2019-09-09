<?php
function read_address($address){
   global $pdo;
   // var_dump ($pdo);
   try {
      $query= "SELECT *
               FROM st_addresses A, st_customers B
               WHERE A.st_customers_cus_id=B.cus_id
                  AND cus_id=:id";
      // die($query);

      //ENVOI de la requête
      $req = $pdo->prepare($query);
      //INITIALISATION des paramètres
      $req->bindParam(":id", $address, PDO::PARAM_INT);
      //EXÉCUTION de la requête
      $req->execute();
      //RÉCUPÉRATION de tous les résultats
      $req->setFetchMode(PDO::FETCH_ASSOC);
      $data = $req->fetch();
      // var_dump($data);exit;
      $req->closeCursor();
      //RETOUR de tous les articles sélectionnés
      return $data;
    }catch (Exception $e) {
      // die("Erreur MySQL :". utf8_encode($e->getMessage()));
      return false;
   }
}