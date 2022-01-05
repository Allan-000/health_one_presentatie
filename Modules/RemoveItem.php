<?php
 require_once ('Database.php');

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

