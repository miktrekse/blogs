<?php

require "functions.php";
require "Database.php";
$config = require ("config.php");


$db = new Database($config["database"]);


$select = "SELECT * FROM posts";
$params = [];
if (isset($_GET["search_query"]) && $_GET["search_query"] != "" ){
    $search_query = "%" . $_GET ["search_query"] . "%";
    $select .= " WHERE content LIKE :nosaukums";
    $params = ["nosaukums" => $search_query];
};
$posts = $db->query($select, $params)->fetchAll();


echo "<h1>Blogs</h1>";
echo "<form>";
echo "<input name='search_query'/>";
echo "<button>Meklet</button>";
echo "</form";

if (count($posts) == 0) {
echo "Not Found";
}

echo "<ul>";
foreach ($posts as $post) {
    echo "<li>" . $post["content"] . "</li>";
}
echo "</ul>";