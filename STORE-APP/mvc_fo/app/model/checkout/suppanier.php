<?php
function suppanier($pro_id){
    
   global $pdo;
   // var_dump ($pdo);
   try {
       $query="DELETE FROM `st_caddies` 
       WHERE `st_caddies`.`st_customers_cus_id` = :id";
      // die($query);

      //ENVOI de la requête
      $req = $pdo->prepare($query);
      //INITIALISATION des paramètres
      $req->bindParam(":id", $pro_id, PDO::PARAM_INT);
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
    }catch (Exception $e) {
      // die("Erreur MySQL :". utf8_encode($e->getMessage()));
      return false; //soit USER pas trouvé soit erreur SQL
      //return "catch" // USER non trouvé
   }
}