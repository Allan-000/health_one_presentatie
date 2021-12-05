<?php
require_once ('../Modules/Database.php');

function addDevice($deviceName,$devicePicture,$categoryId,$description){
    try{
        global $pdo;
        $query=$pdo->prepare('INSERT INTO product (name , picture, category_id, description) VALUES (:name , :picture, :categoryId, :description)');
        $query->bindParam('name',$deviceName);
        $query->bindParam('picture',$devicePicture);
        $query->bindParam('categoryId',$categoryId);
        $query->bindParam('description',$description);
        $query->execute();
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}