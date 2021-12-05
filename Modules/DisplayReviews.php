<?php
global $pdo;
global $productId;

try {
    $query=$pdo->prepare('SELECT * FROM review WHERE product_id = :product_id');
    $query->bindParam("product_id",$productId);
    $query->execute();
    $reviews=$query->fetchAll(PDO::FETCH_CLASS);
}
catch (PDOException $e){
    echo $e->getMessage();
}
