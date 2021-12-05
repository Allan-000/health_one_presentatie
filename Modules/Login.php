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

