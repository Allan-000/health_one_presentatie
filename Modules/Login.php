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

function adjustUserData($name,$email,$password,$role,$gender){
    try{
        global $pdo;
        $query=$pdo->prepare('UPDATE user 
                                                    SET name=:name, email=:email, password=:password , role=:role ,gender=:gender 
                                                    WHERE email=:email');
        $query->bindParam('name',$name);
        $query->bindParam('email',$email);
        $query->bindParam('password',$password);
        $query->bindParam('role',$role);
        $query->bindParam('gender',$gender);
        $query->execute();
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}