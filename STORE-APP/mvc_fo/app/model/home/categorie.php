<?php
function get_products()
{
    global $pdo;
    // RECUPERER LES PRODUITS AVEC POUR CHACUN UN TABLEAU DE CATEGORIES AUQUEL IL EST ATTACHE:
    // $sql = "SELECT p.*, GROUP_CONCAT(DISTINCT c.cat_descr  ORDER BY c.cat_descr DESC SEPARATOR ' , ' ) AS categories , GROUP_CONCAT(DISTINCT c.cat_id  ORDER BY c.cat_descr DESC SEPARATOR ' , ' ) AS ids_cats
    // FROM st_products AS p
    // INNER JOIN st_products_has_st_categories AS pc ON p.pro_id = pc.st_products_pro_id
    // INNER JOIN  st_categories AS c ON pc.st_categories_cat_id = c.cat_id
    // GROUP BY p.pro_id, p.pro_title,p.pro_descr LIMIT 3";
    // SELECTIONNER DES PRODUITS APARETENANT A PLUSIEURS CATEGORIES:
    $sql = "SELECT pc.st_products_pro_id, p.pro_id, p.pro_title, p.pro_subtitle3
    FROM st_products_has_st_categories AS pc
    JOIN st_products AS p ON p.pro_id = pc.st_products_pro_id
    WHERE pc.st_categories_cat_id IN (1)
    GROUP BY pc.st_products_pro_id";
    $req = $pdo->prepare($sql);
    $req->execute();
    $products = $req->fetchAll();
    return $products;
}