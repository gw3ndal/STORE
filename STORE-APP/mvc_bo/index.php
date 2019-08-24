<?php require_once 'config/initialize.php'?>
<pre>
<?php var_dump(url_for('vendor'));?>
<?php var_dump(__DIR__);?>






<?php
// Lister les noms des dossiers et fichiers d'un projet:
$rootDir = __DIR__;
$allFiles = array_diff(scandir($rootDir . "/", 1), [".", ".."]); // Use array_diff to remove both period values eg: ("." , "..")
print_r($allFiles);
?>
</pre>