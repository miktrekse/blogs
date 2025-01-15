<?php
require "views/posts/create.view.php";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $params = ["content" => $_POST["content"]];
$sql = "INSERT INTO posts (content) VALUES (:content)";
$post = $db->query($sql, $params)->fetch();
header("Location: /"); exit();
}
$pageTitle = "Ligma";
