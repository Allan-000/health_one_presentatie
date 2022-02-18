<?php
require_once 'Database.php';

function uploadRequest($userName,$email_adres,$request,$user_id){
    try{
        global $pdo;
        $query=$pdo->prepare('INSERT INTO requests (user_name, email_adres, request, user_id) VALUES (:user_name, :email_adres,:request,:user_id)');
        $query->bindParam('user_name',$userName);
        $query->bindParam('email_adres',$email_adres);
        $query->bindParam('request',$request);
        $query->bindParam('user_id',$user_id);
        $query->execute();
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}

function getRequest($id){
    try{
        global $pdo;
        $query=$pdo->prepare('SELECT * FROM requests WHERE id=:id');
        $query->bindParam('id',$id);
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS,'Request');
        $request=$query->fetch();

        return $request;
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}

function getRequsets(){
    try{
        global $pdo;
        $query=$pdo->prepare('SELECT * FROM requests');
        $query->execute();
        $requests=$query->fetchAll(PDO::FETCH_CLASS);

        return $requests;
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}

function deleteRequest($requestId){
    try{
        global $pdo;
        $query=$pdo->prepare('DELETE FROM requests WHERE id=:id');
        $query->bindParam('id',$requestId);
        $query->execute();

    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}