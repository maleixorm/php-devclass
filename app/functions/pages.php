<?php

function load() {
    $page = (string)filter_input(INPUT_GET, 'page');
    $page = (!$page) ? 'pages/home.php' : "pages/{$page}.php";
    if (!file_exists($page)) {
        throw new Exception("Ops! Alguma coisa errada aconteceu!");
    }
    return $page;
}