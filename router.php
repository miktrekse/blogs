<?
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
if ($uri = "/"){
    require "controllers/index.php";
} elseif ($uri = "about") {
    require "controllers/story.php";
}elseif ($uri = "categories") {
    require "controllers/categories.php";
} elseif ($uri = http_response_code(404)){
    echo "<p>Atvainojiet, lapa netika atrasta!</p>";
}
