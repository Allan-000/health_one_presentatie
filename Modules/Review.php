<?php

function saveReviews($name,$rating,$description,$product_id) {
    try {
        global $pdo;
        $query= $pdo->prepare('INSERT INTO review (reviewer_name, rating, description, product_id) VALUES (:reviewername , :rating, :description ,:product_id )' );
        $query->bindParam("reviewername",$name);
        $query->bindParam("rating",$rating);
        $query->bindParam("description",$description);
        $query->bindParam("product_id",$product_id);
        $query->execute();
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}

function getReviews($product_id){
    try{
        global $pdo;
        $query=$pdo->prepare('SELECT * FROM review WHERE product_id = :id');
        $query->bindParam('id',$product_id);
        $query->execute();
        $reviews=$query->fetchAll(PDO::FETCH_CLASS);
        return $reviews;
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}

