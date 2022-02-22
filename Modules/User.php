<?php
global $pdo;
function getUser($email,$password){
    try {
        global $pdo;
        $query=$pdo->prepare('SELECT * FROM user WHERE email=:email AND password=:password');
        $query->bindParam('email',$email);
        $query->bindParam('password',$password);
        $query->setFetchMode(PDO::FETCH_CLASS,'User');
        $query->execute();
        $signedUser=$query->fetch();
        return $signedUser;
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}

function doesUserExist($email){
    try{
        global $pdo;
        $query=$pdo->prepare('SELECT * FROM user WHERE email=:email');
        $query->bindParam('email',$email);
        $query->setFetchMode(PDO::FETCH_CLASS,'User');
        $query->execute();
        $existingUser=$query->fetch();

        return $existingUser;
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}

function adjustUserData($name,$email,$password,$role,$gender,$userId){
    try{
        global $pdo;
        $query=$pdo->prepare('UPDATE user 
                                    SET name=:name, email=:email, password=:password , role=:role ,gender=:gender 
                                    WHERE id=:id');
        $query->bindParam('name',$name);
        $query->bindParam('email',$email);
        $query->bindParam('password',$password);
        $query->bindParam('role',$role);
        $query->bindParam('gender',$gender);
        $query->bindParam('id',$userId);
        $query->execute();
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}

function addUser($name,$email,$password,$gender,$picture,$role){
    try{
        global $pdo;
        $query=$pdo->prepare('INSERT INTO user (name, email, password,gender,picture,role) VALUES (:name,:email,:password,:gender,:picture,:role)');
        $query->bindParam('name',$name);
        $query->bindParam('email',$email);
        $query->bindParam('password',$password);
        $query->bindParam('gender',$gender);
        $query->bindParam('picture',$picture);
        $query->bindParam('role',$role);
        $query->execute();
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}