<?php

global $params;
//show the admin home page
if($params[1]=='admin' & empty($params[2])){
    include_once ('../Templates/adminhome.php');
}
//show device management page
if($params[1]=='admin' && !empty($params[2])){
    switch ($params[2]){
        case 'beheer':
            include_once ('../Templates/beheer.php');
            break;

            //here to code the other cases like opening houers
    }
}
if($params[1]=='admin' && !empty( $params[2]) && $params[2]=='beheer' && !empty($params[3])){
    switch ($params[3]){
        case 'additempage':
            include_once ('../Templates/additempage.php');
            break;
    }
}

