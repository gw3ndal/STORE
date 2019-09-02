<?php
include "../../model/products/get_products.php";

$datas = get_products();

echo "<pre>";
print_r(get_products());
echo "</pre>";