<?php

// Função Dump and Die - Para testes
function dd($dump) {
    var_dump($dump);
    die();
}

function request() {
    $request = $_SERVER['REQUEST_METHOD'];
    if ($request == 'POST') {
        return $_POST;
    }
    return $_GET;
}