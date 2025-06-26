<?php

require "../../../bootstrap.php";

if (isEmpty()) {
    flash('message', 'Preencha todos os campos do formulário.');
    header("location: ../../?page=contato");
}

$validate = validate([
    'name' => 's',
    'email' => 'e',
    'subject' => 's',
    'message' => 's'
]);

dd($validate->name);