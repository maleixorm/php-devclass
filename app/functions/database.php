<?php

function connect() {
    $pdo = new PDO("mysql:host=localhost;dbname=fullstack;charset=utf8", 'php', '123456');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    return $pdo;
}

function create($table, $fields) {
    if (!is_array($fields)) {
        $fields = (array) $fields;
    }
    $sql = "INSERT INTO {$table}";
    $sql .= "(". implode(',', array_keys($fields)) . ")";
    $sql .= " values (:" . implode(',:', array_keys($fields)) . ");";

    // dd($sql);

    $pdo = connect();
    $insert = $pdo->prepare($sql);
    return $insert->execute($fields);
}

function update() {

}

function find() {

}

function delete() {

}