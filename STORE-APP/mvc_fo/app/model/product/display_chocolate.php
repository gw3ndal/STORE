<?php
function display_chocolate($id = null)
{
   global $pdo;
    // RECUPERER LES PRODUITS AVEC POUR CHACUN UN TABLEAU DE CATEGORIES AUQUEL IL EST ATTACHE:
    $sql = "SELECT p.*,
    GROUP_CONCAT(DISTINCT c.cat_descr  ORDER BY c.cat_descr DESC SEPARATOR ' , ' ) AS categories,
    GROUP_CONCAT(DISTINCT c.cat_id  ORDER BY c.cat_descr DESC SEPARATOR ' , ' ) AS ids_cats
    FROM st_products AS p
    INNER JOIN st_products_has_st_categories AS pc ON p.pro_id = pc.st_products_pro_id
    INNER JOIN  st_categories AS c ON pc.st_categories_cat_id = c.cat_id
    WHERE p.pro_id = :id";

    $req = $pdo->prepare($sql);
    $req->execute([':id' => $id]);
    $products = $req->fetchAll();

    function concat_categories($product)
    {
        $cats = array_combine(explode(',', $product['ids_cats']), explode(',', $product['categories']));
        $a = array_map('trim', array_keys($cats));
        $b = array_map('trim', $cats);
        $cats = array_combine($a, $b);

        return [
            "pro_id" => $product['pro_id'],
            "pro_title" => $product['pro_title'],
            "pro_subtitle1" => $product['pro_subtitle1'],
            "pro_subtitle2" => $product['pro_subtitle2'],
            "pro_subtitle3" => $product['pro_subtitle3'],
            "pro_img_url_recto" => $product['pro_img_url_recto'],
            "pro_img_url_verso" => $product['pro_img_url_verso'],
            "pro_descr" => $product['pro_descr'],
            "pro_price_euro" => $product['pro_price_euro'],
            "pro_date" => $product['pro_date'],
            "categories" => $cats,
        ];
    }
   $data = array_map('concat_categories', $products);

    return $data;
}