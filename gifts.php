<?php

require "Database.php";
$config = require ("config.php");


$db = new Database($config["database"]);
$posts = $db->query("SELECT * FROM gifts")->fetchAll();

echo "<ol>";
foreach ($posts as $post) {
    echo "<li>" . $post["name"]. " " . $post["count_available"]. "</li>";
}
echo "</ol>";