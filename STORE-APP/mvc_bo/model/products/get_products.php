<?php
require_once "database.php";

function get_products()
{
    $pdo = dbConnect();
    $datas = $pdo->query("SELECT pro_title,pro_subtitle1 FROM st_products")->fetchAll();
    return $datas;
}