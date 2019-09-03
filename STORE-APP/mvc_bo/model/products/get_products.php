<?php
function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=afpa0519_store_1;charset=utf8', 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // PDO::FETCH_OBJ
        ]);
        return $db;
    } catch (Exception $e) {
        return die('Erreur MySQL : ' . $e->getMessage());
    }
}

function get_products()
{
    $pdo = dbConnect();
    $sql = "SELECT pro_title,pro_subtitle1,pro_subtitle2, pro_price_euro FROM st_products";
    $req = $pdo->prepare($sql);
    $req->execute();
    $products = $req->fetchAll();
    return $products;
}