<?php
function editAddress($edit){
  global $pdo;
  // var_dump ($pdo);
  try {
         $query= "UPDATE st_addresses
                  SET add_address1=:address1, 
                      add_address2=:address2,
                      add_city=:city, 
                      add_zipcode=:zipcode
                      WHERE st_customers_cus_id=:cus_id";
      //die($query);
      $req = $pdo->prepare($query);
      $req->bindParam(":address1", $edit["add_address1"], PDO::PARAM_STR);
      $req->bindParam(":address2", $edit["add_address2"], PDO::PARAM_STR);
      $req->bindParam(":city", $edit["add_city"], PDO::PARAM_STR);
      $req->bindParam(":zipcode", $edit["add_zipcode"], PDO::PARAM_STR);
      $req->bindParam(":cus_id", $edit["cus_id"], PDO::PARAM_INT);
      $req->execute();
      return true;
    }catch (Exception $e) {
   // die ("SQL Erreur : " . utf8_encode($e->getMessage()));
       //die("Erreur MySQL :". utf8_encode($e->getMessage()));
       return false; //soit USER pas trouvé soit erreur SQL
      //return "catch" // USER non trouvé
  }
}