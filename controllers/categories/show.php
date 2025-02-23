<?php

if (!isset($_GET["id"]) || $_GET["id"] == "") {
   redirectIfNotFound();
}
$sql = "SELECT * FROM categories WHERE id = :id";
$params = ["id" => $_GET["id"]];
$category = $db->query($sql, $params)->fetch();

if (!$category) {
    redirectIfNotFound();
}

require "views/categories/show.view.php";