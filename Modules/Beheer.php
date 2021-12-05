<?php
require_once ('Database.php');

global $pdo;

function getProductsAdmin(){
    try{
        global $pdo;
        $query=$pdo->prepare('SELECT * FROM product');
        $query->execute();
        $products=$query->fetchAll(PDO::FETCH_CLASS);
        return $products;
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}
