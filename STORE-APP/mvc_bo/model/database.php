<?php
function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=testing;charset=utf8', 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // PDO::FETCH_OBJ
        ]);
        return $db;
    } catch (Exception $e) {
        die('Erreur MySQL : ' . $e->getMessage());
    }
}