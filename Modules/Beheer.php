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
function removeItem($id){
    try {
        global $pdo;

        $query=$pdo->prepare('DELETE FROM product WHERE id = :id');
        $query->bindParam('id',$id);
        $query->execute();
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}

function adjustItem($name,$categoryId,$description,$productId){
    try {
        global $pdo;
        $query=$pdo->prepare('UPDATE product SET name = :name ,category_id = :category_id , description= :description WHERE id=:id');
        $query->bindParam('name',$name);
        $query->bindParam('category_id',$categoryId);
        $query->bindParam('description',$description);
        $query->bindParam('id',$productId);
        $query->execute();
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}
