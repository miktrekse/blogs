<?php
require "functions.php";
require "Database.php";
$config = require ("config.php");

$db = new Database($config["database"]);

$select = "SELECT * FROM categories";
$params = [];
if (isset($_GET["search_query"]) && $_GET["search_query"] != "" ){
    $search_query = "%" . $_GET["search_query"] . "%";
    $select .= " WHERE category_name LIKE :nosaukums";
    $params = ["nosaukums" => $search_query];
};
$category_name = $db->query($select, $params)->fetchAll();

echo "<div class='flex items-center justify-center min-h-screen bg-gray-50 p-6'>"; // Centering content
echo "<div class='bg-white p-8 rounded-lg shadow-lg w-full sm:w-96'>"; // Container with shadow and max width
echo "<h1 class='text-4xl font-extrabold mb-6 text-center text-gray-800'>Blogs</h1>"; // Heading
echo "<form class='mb-6 flex justify-between items-center gap-2'>"; // Improved form layout
echo "<input name='search_query' class='border border-gray-300 px-4 py-3 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-blue-500' placeholder='Search categories...'/>";
echo "<button class='bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-all duration-200 focus:outline-none'>Search</button>";
echo "</form>";

if (count($category_name) == 0){
    echo "<p class='text-center text-red-500 font-semibold'>No categories found</p>";
}

echo "<ul class='space-y-4'>";
foreach ($category_name as $category_names) {
    echo "<li class='bg-gray-100 p-4 rounded-lg shadow-md hover:bg-gray-200 transition-all duration-200'>" . $category_names["category_name"] . "</li>";
}
echo "</ul>";
echo "</div>";
echo "</div>";
?>
