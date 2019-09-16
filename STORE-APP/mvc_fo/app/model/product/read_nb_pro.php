<?php
function read_nb_pro($id){
   global $pdo;
   // var_dump ($pdo);
   try {
      $query= "SELECT count(*) AS nb
               FROM st_products_has_st_categories
               WHERE st_categories_cat_id=:id";
      // die($query);

      //ENVOI de la requête
      $req = $pdo->prepare($query);
      $req->bindParam(":id", $id, PDO::PARAM_INT);
      //EXÉCUTION de la requête
      $req->execute();
      //RÉCUPÉRATION de tous les résultats
      $req->setFetchMode(PDO::FETCH_ASSOC);
      $data = $req->fetch();
      // var_dump($data);exit;
      $req->closeCursor();
      //RETOUR de tous les articles sélectionnés
      return $data ["nb"];
    }catch (Exception $e) {
      // die("Erreur MySQL :". utf8_encode($e->getMessage()));
      return false;
   }
}