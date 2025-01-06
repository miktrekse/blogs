<?php

require "functions.php";
require "Database.php";
$config = require ("config.php");


$db = new Database($config["database"]);
$posts = $db->query("SELECT * FROM posts")->fetchAll();

if (isset($_GET["search_query"]) && $_GET["search_query"] != "" );{
    echo "Atgriezt ierakstus!";
    $posts = $db->query("SELECT * FROM posts WHERE content LIKE '%" . $_GET["search_query"] . "%';")->fetchAll();
};



echo "<h1>Blogs</h1>";
echo "<form>";
echo "<input name='search_query'/>";
echo "<button>Meklet</button>";
echo "</form";

echo "<ul>";
foreach ($posts as $post) {
    echo "<li>" . $post["content"] . "</li>";
}
echo "</ul>";