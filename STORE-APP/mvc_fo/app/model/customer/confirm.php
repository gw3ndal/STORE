<?php
function confirm($token){
   global $pdo;
   // var_dump ($pdo);
   try {

      $query=" UPDATE st_customers
               SET cus_actif=1,
                   cus_token=''
               WHERE cus_token = :token
               ";
      //ENVOI de la requête
      $req = $pdo->prepare($query);
      //INITIALISATION des paramètres
      $req->bindParam(":token", $token, PDO::PARAM_STR);
      //EXÉCUTION de la requête
      $req->execute();
      return true;
    }catch (Exception $e) {
      return false;
   }
}