<?php

function send(array $data){
    $email = new \PHPMailer\PHPMailer\PHPMailer;
    $email->CharSet = 'UTF-8';
    $email->SMTPSecure = 'plain';
    $email->isSMTP();
    $email->Host = 'sandbox.smtp.mailtrap.io';
    $email->Port = 2525;
    $email->SMTPAuth = true;
    $email->Username = 'dffd410013e48d';
    $email->Password = 'c2e74d91ac78dd';
    $email->isHTML(true);
    $email->setFrom('contato@marcosaleixo.com.br');
    $email->FromName = $data['quem'];
    $email->addAddress($data['para']);
    $email->Body = $data['mensagem'];
    $email->Subject = $data['assunto'];
    $email->AltBody = 'Para vizualizar esse email tenha certeza de estar utilizando um cliente que aceita HTML!';
    $email->msgHTML($data['mensagem']);
    return $email->send();
}