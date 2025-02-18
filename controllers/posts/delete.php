<?php
if($_SERVER["REQUEST_METHOD"] == "GET"){
    redirectIfNotFound();  
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (is_numeric($_POST['id'])) {
        $sql = "DELETE FROM posts
    WHERE id = :id;";
            $params = ["id" =>$_POST["id"]];
        $post = $db->query($sql, $params)->fetch();
    header("Location:/"); 
    exit();
}
}

