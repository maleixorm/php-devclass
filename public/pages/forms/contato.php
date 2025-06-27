<?php

require "../../../bootstrap.php";

if (isEmpty()) {
    flash('message', 'Preencha todos os campos do formulário.');
    redirect("contato");
}

$validate = validate([
    'name' => 's',
    'email' => 'e',
    'subject' => 's',
    'message' => 's'
]);

$data = [
    'quem' => $validate->email,
    'para' => 'contato@marcosaleixo.com.br',
    'assunto' => $validate->subject,
    'mensagem' => $validate->message

];

if(send($data)){
    flash('message', 'Email enviado com sucesso', 'success');
    redirect("contato");
}