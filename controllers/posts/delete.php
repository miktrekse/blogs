<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = $_POST['id'];

    if (is_numeric($post)) {
        $sql = "DELETE FROM posts WHERE id = $post";
}

