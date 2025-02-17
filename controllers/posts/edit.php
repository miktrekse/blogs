<?php
require "Validator.php";
if (!isset($_GET["id"]) || $_GET["id"]==""){
    redirectIfNotFound();
}
 $errors = [];
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (!Validator::string($_POST["content"], max:50)){
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }

if (empty($errors)) {
    $sql = "UPDATE posts
    SET content = :content
    WHERE id = :id;";
            $params = ["id" =>$_POST["id"],"content"  => $_POST["content"]];
        $post = $db->query($sql, $params)->fetch();
    header("Location:/show?id=".$_POST["id"]); 
}

}
$sql = "SELECT * FROM posts where id = :id ";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();

if(!$post){
    redirectIfNotFound();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($errors)){
$post["content"] = $_POST["content"];
}

$pageTitle = "Edit";
require "views/posts/edit.view.php";

