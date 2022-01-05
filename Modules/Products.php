<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
include ('../Modules/Database.php');
global $products;
function getProducts(int $categoryId)
{
    global $pdo;
    try{
        $query=$pdo->prepare('SELECT * FROM product WHERE category_id = ?');
        $query->bindParam(1,$categoryId);
        $query->execute();
        $products=$query->fetchAll(PDO::FETCH_CLASS,'Product');
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
    return $products;
}

function getProduct(int $id)
{
    try{
        global $pdo;
        $query=$pdo->prepare('SELECT * FROM product WHERE id=?');
        $query->bindParam(1,$id);
        $query->setFetchMode(PDO::FETCH_CLASS,'Product');
        $query->execute();
        $product=$query->fetch();
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
    return $product;
}


