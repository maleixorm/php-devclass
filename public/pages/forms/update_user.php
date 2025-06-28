<?php

require "../../../bootstrap.php";

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

if (isEmpty()) {
    flash('message', 'Preencha todos os campos do formulário.');
    return redirect("edit_user&id={$id}");
}

$validate = validate([
    'name' => 's',
    'lastname' => 's',
    'email' => 'e'
]);

$atualizado = update('users', $validate, ['id', $id]);

if ($atualizado) {
    flash('message', 'Cadastro atualizado com sucesso!', 'success');
    return redirect("edit_user&id={$id}");
}

flash('message', 'Erro ao atualizar o registro!');
redirect("edit_user&id={$id}");