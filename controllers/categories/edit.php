<?php
require "Validator.php";
if (!isset($_GET["id"]) || $_GET["id"]==""){
    redirectIfNotFound();
}
 $errors = [];
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (!Validator::string($_POST["category_name"], min:3, max:25)){
        $errors["category_name"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }

if (empty($errors)) {
    $sql = "UPDATE categories
    SET category_name = :category_name
    WHERE id = :id;";
            $params = ["id" =>$_POST["id"],"category_name"  => $_POST["category_name"]];
        $category = $db->query($sql, $params)->fetch();
    header("Location:/show?id=".$_POST["id"]); 
}

}
$sql = "SELECT * FROM categories where id = :id ";
$params = ["id" => $_GET["id"]];
$category = $db->query($sql, $params)->fetch();

if(!$category){
    redirectIfNotFound();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($errors)){
$category["category_name"] = $_POST["category_name"];
}

$pageTitle = "Edit";
require "views/categories/edit.view.php";

