<?php
require_once "database.php";

function get_products($offset, $limite)
{
    $pdo = dbConnect();
    $sql = "SELECT pro_id, pro_title,pro_subtitle1 FROM st_products";
    $datas = $pdo->prepare($sql);
    return $datas;
}