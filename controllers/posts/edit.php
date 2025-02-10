<?php
if (!isset($_GET["id"])){
    echo "nav atrasts";
 $errors = [];
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (!Validator::string($_POST["content"], max: 50)){
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $params = ["content" => $_POST["content"]];
    $sql = "UPDATE posts
    SET content = :content
    WHERE id = :id;";
    $post = $db->query($sql, $params)->fetch();
    header("Location: /"); 
exit();
}
}
} 

$pageTitle = "Edit";
require "views/posts/edit.view.php";

