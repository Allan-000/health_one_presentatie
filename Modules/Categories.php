<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
include_once ("../Modules/Database.php");
function getCategories() {
    global $pdo;
    $query = $pdo->prepare('SELECT * FROM category');
    $query->execute();
    $categories = $query->fetchAll(PDO::FETCH_CLASS);
    return $categories;
}

function getCategoryName(int $id) {

}
