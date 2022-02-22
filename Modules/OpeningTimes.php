<?php
require_once 'Database.php';

function getTimes(){
    try{
        global $pdo;
        $query=$pdo->prepare('SELECT * FROM opening_times');
        $query->execute();
        $openingTimes=$query->fetchAll(PDO::FETCH_CLASS);

        return $openingTimes;
    }
    catch (PDOException $e){
        echo $e->getMessege();
    }
}

function getSingleOpningTime($id){
    try{
        global $pdo;
        $query=$pdo->prepare('SELECT * FROM opening_times WHERE id=:id');
        $query->bindParam('id',$id);
        $query->execute();
        $timedetails=$query->fetchAll(PDO::FETCH_CLASS);

        return $timedetails;
    }
    catch (PDOException $e){
        echo $e->getMessege();
    }
}

function adjustTime($opening,$closing,$id){
    try{
        global $pdo;
        $query=$pdo->prepare('UPDATE opening_times SET opening=:opening , closing=:closing WHERE id=:id');
        $query->bindParam('opening',$opening);
        $query->bindParam('closing',$closing);
        $query->bindParam('id',$id);
        $query->execute();
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}
