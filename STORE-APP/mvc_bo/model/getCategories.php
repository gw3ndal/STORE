<?php
// Include the database configuration file
require 'database.php';

function categoryTree($parent_id = 0, $sub_mark = '')
{
    $db = dbConnect();
    $query = $db->prepare("SELECT * FROM categories WHERE parent_id = $parent_id ORDER BY name ASC");
    $query->execute();
    $$categories = $query->fetchAll();
    foreach ($$categories as $categorie) {
        echo '<option value="' . $categorie['id'] . '">' . $sub_mark . $categorie['name'] . '</option>';
        categoryTree($categorie['id'], "$sub_mark ---");
    }

}
?>

<select name="category">
    <?php categoryTree();?>
</select>
<select name="category">
    <?php categoryTree(4);?>
</select>