<?php
    function lire_cat(){
        global $pdo;
        try {
            $query= "SELECT * 
            FROM st_products
             AND st_sscat=:id
            ";
            $req = $pdo->prepare($query);
            $req->bindParam(":id", $_GET['id'], PDO::PARAM_INT);
            $req->execute();
            $req->setFetchMode(PDO::FETCH_ASSOC);
            $data = $req->fetchAll();
            // var_dump($_GET['id']);
            var_dump($data);
            $req->closeCursor();
            return $data;
        }catch (Exception $e) {
            // die("Erreur MySQL :". utf8_encode($e->getMessage()));
             return false;
        }
        //RETOUR de tous les articles sélectionnés
    }		