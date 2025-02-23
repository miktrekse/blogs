<?php
if($_SERVER["REQUEST_METHOD"] == "GET"){
    redirectIfNotFound();  
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (is_numeric($_POST['id'])) {
        $sql = "DELETE FROM categories
    WHERE id = :id;";
            $params = ["id" =>$_POST["id"]];
        $category = $db->query($sql, $params)->fetch();
    header("Location:/categories/index"); 
    exit();
}
}
