<?php


function dd($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    die();
}
function redirectIfNotFound($location = "/"){
    http_response_code(404);
    header("Location: $location", 302);
    exit();
}