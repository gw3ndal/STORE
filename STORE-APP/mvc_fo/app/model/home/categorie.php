<?php
    function lire_categorie(){
        global $pdo;
        try {
            $query= "SELECT *
                        FROM st_categories_main";
            $req = $pdo->query($query);
            $req->setFetchMode(PDO::FETCH_ASSOC);
            $cat = $req->fetchAll();
            //var_dump($data);
            $req->closeCursor();
            return $cat;
        }catch (Exception $e) {
            // die("Erreur MySQL :". utf8_encode($e->getMessage()));
            return false;
        }
    }