<?php
require_once ('Database.php');

global $pdo;

function getProductsAdmin(){
    try{
        global $pdo;
        $query=$pdo->prepare('SELECT product.id AS product_id, product.name AS product_name, product.category_id ,product.picture , category.id, category.category_name AS category
                                    FROM product
                                    JOIN category
                                    ON product.category_id=category.id;');
        $query->execute();
        $products=$query->fetchAll(PDO::FETCH_CLASS);

        return $products;
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}
