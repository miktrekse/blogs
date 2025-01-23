<?php
require "Validator.php";
if (!isset($_GET["id"])){
    echo "nav atrasts";
 $errors = [];
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (!Validator::string($_POST["content"], max: 50)){
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }
if (empty($errors)) {
    $params = ["content" => $_POST["content"]];
    $sql = "INSERT INTO posts (content) VALUES (:content)";
    $post = $db->query($sql, $params)->fetch();
    header("Location: /"); 
exit();
}
}
}

$pageTitle = "Izveidot ierakstu";
require "views/posts/edit.view.php";

