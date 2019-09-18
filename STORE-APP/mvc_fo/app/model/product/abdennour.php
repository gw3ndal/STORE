<?php
​
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
​
// =====================================================================================================
​
function get_product_with_cats($id = null)
{
    $pdo = dbConnect();
​
    // RECUPERER LES PRODUITS AVEC POUR CHACUN UN TABLEAU DE CATEGORIES AUQUEL IL EST ATTACHE:
    $sql = "SELECT p.*,
    GROUP_CONCAT(DISTINCT c.cat_descr  ORDER BY c.cat_descr DESC SEPARATOR ' , ' ) AS categories ,
    GROUP_CONCAT(DISTINCT c.cat_id  ORDER BY c.cat_descr DESC SEPARATOR ' , ' ) AS ids_cats
    FROM st_products AS p
    INNER JOIN st_products_has_st_categories AS pc ON p.pro_id = pc.st_products_pro_id
    INNER JOIN  st_categories AS c ON pc.st_categories_cat_id = c.cat_id
    WHERE p.pro_id = :id # On utilise WHERE juste pour sélectionner un seul produit qui nous intéresse, mais on peut ommetre cette ligne pour récuperer tout les produits.
    #GROUP BY p.pro_id, p.pro_title,p.pro_descr LIMIT 3";
​
    $req = $pdo->prepare($sql);
    $req->execute([':id' => $id]);
    $products = $req->fetchAll();
​
    function concat_categories($product)
    {
        $cats = array_combine(explode(',', $product['ids_cats']), explode(',', $product['categories']));
        $a = array_map('trim', array_keys($cats));
        $b = array_map('trim', $cats);
        $cats = array_combine($a, $b);
​
        return [
            "id" => $product['pro_id'],
            "title" => $product['pro_title'],
            "sub1" => $product['pro_subtitle1'],
            "sub2" => $product['pro_subtitle2'],
            "sub3" => $product['pro_subtitle3'],
            "img1" => $product['pro_img_url_recto'],
            "img2" => $product['pro_img_url_verso'],
            "desc" => $product['pro_descr'],
            "price" => $product['pro_price_euro'],
            "date" => $product['pro_date'],
            "categories" => $cats,
        ];
    }
    $arr = array_map('concat_categories', $products);
​
    return $arr;
}
​
// echo "<pre>";
// print_r(get_product_with_cats(1));
// echo "</pre>";
​
//=========================================================================================================
//=========================================================================================================
//=========================================================================================================
//=========================================================================================================
​
function get_products_by_cat($id = null)
{
    $pdo = dbConnect();
​
    // RECUPERER LES PRODUITS APARETENANT A UNE OU PLUSIEURS SOUS-CATEGORIES:
    $sql = "SELECT p.*
    FROM st_products_has_st_categories AS pc
    JOIN st_products AS p ON p.pro_id = pc.st_products_pro_id
    WHERE pc.st_categories_cat_id IN (:id)
    GROUP BY pc.st_products_pro_id";
​
    $req = $pdo->prepare($sql);
    $req->execute([':id' => $id]);
    $products = $req->fetchAll();
​
    return $products;
}
​
// echo "<pre>";
// print_r(get_products_by_cat(1));
// echo "</pre>";
​
//=========================================================================================================
//=========================================================================================================
//=========================================================================================================
//=========================================================================================================
​
function get_products_by_main($id = null)
{
    $pdo = dbConnect();
​
    // RECUPERER LES SOUS-CATEGORIES APARETENANT A UNE OU PLUSIEURS CATEGORIES PARENTS:
    $sql = "SELECT  c.cat_id, c.cat_descr
    FROM st_categories_main_has_st_categories AS cc
    JOIN st_categories AS c ON c.cat_id = cc.st_categories_cat_id
    WHERE cc.st_categories_main_cat_main_id IN (:id) # L'id d'une ou plusieurs catégories PARENT.
    GROUP BY cc.st_categories_cat_id";
​
    $req = $pdo->prepare($sql);
    $req->execute([':id' => $id]);
    $products = $req->fetchAll();
    function get_product_cats($data)
    {
        $pdo = dbConnect();
        //
        $id_cat = intval($data['cat_id']);
        // Récupérer et filtrer les produits + leurs catégories par un "cat_id":
        $sql = "SELECT p.*,c.cat_id, c.cat_descr
    FROM st_products_has_st_categories AS pc
    JOIN st_products AS p ON p.pro_id = pc.st_products_pro_id
    JOIN st_categories AS c ON c.cat_id = pc.st_categories_cat_id
    WHERE pc.st_categories_cat_id IN (:id)
    LIMIT 6";
​
        $req = $pdo->prepare($sql);
        $req->execute([':id' => $id_cat]);
        $products = $req->fetchAll();
​
        return $products;
    }
    $products_categories = array_map('get_product_cats', $products);
// $datas === get_products(): est un tableau de sous catégories d'une catégorie PARENT.
    // On map sur le tableau $datas avec comme fonction de callback arrProByCat().
​
    return $products_categories;
}
​
echo "<pre>";
print_r(get_products_by_main(2));
echo "</pre>";