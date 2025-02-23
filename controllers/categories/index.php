<?php



$select = "SELECT * FROM categories";
$params = [];
if (isset($_GET['search']) && $_GET['search']!=""){
    $search_query="%" . $_GET['search'] . "%";
    $select .= " WHERE category_name LIKE :nosaukums";
    $params= ["nosaukums"=>$search_query];
}

$category = $db->query($select, $params)->fetchAll();


$pageTitle = "Categories";
require "views/categories/index.view.php";