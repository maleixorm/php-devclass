<?php

function connect() {
    $pdo = new PDO("mysql:host=localhost;dbname=fullstack;charset=utf8", 'php', '123456');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    return $pdo;
}

function all($table) {
    $pdo = connect();
    $sql = "SELECT * FROM {$table}";
    $list = $pdo->prepare($sql);
    $list->execute();
    return $list->fetchAll();
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

function update($table, $fields, $where) {
    if (!is_array($fields)) {
        $fields = (array) $fields;
    }
    $pdo = connect();
    $data = array_map(function ($field) {
        return "{$field} = :{$field}";
    }, array_keys($fields));
    $sql = "UPDATE {$table} SET ";
    $sql .= implode(', ', $data);
    $sql .= " WHERE {$where[0]} = :{$where[0]}";
    // dd($sql);
    $data = array_merge($fields, [$where[0] => $where[1]]);
    $update = $pdo->prepare($sql);
    $update->execute($data);
    return $update->rowCount();
}

function find($table,$field,$value) {
    $pdo = connect();
    $value = filter_var($value, FILTER_SANITIZE_NUMBER_INT);
    $sql = "SELECT * FROM {$table} WHERE {$field} = :{$field}";
    $find = $pdo->prepare($sql);
    $find->bindValue($field, $value);
    $find->execute();
    return $find->fetch();
}

function delete($table, $field, $value) {
    $pdo = connect();
    $sql = "DELETE FROM {$table} WHERE {$field} = :{$field}";
    $delete = $pdo->prepare($sql);
    $delete->bindValue($field, $value);
    return $delete->execute();
}