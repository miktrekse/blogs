<?php
require "Validator.php";

 $errors = [];
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (!Validator::string($_POST["category_name"], max: 50)){
        $errors["category_name"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }
if (empty($errors)) {
    $params = ["category_name" => $_POST["category_name"]];
    $sql = "INSERT INTO categories (category_name) VALUES (:category_name)";
    $post = $db->query($sql, $params)->fetch();
    header("Location: /"); 
exit();
}
}

$pageTitle = "Izveidot ierakstu";
require "views/categories/categories.create.view.php";

