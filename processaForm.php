<?php

$para= "diego.ansanello@gmail.com";
$assunto= "Contato pelo Site";
$nome= $_REQUEST['nome'];
$fone= $_REQUEST['telefone'];
$email= $_REQUEST['email'];
$msg= $_REQUEST['assunto'];

    $corpo = "<strong> Mensagem de Contato</strong><br><br>";
    $corpo .= "<strong> Nome: </strong> $nome";
    $corpo .= "<br><strong> Telefone: </strong> $fone";
    $corpo .= "<br><strong> Email: </strong> $email";
    $corpo .= "<br><strong> Mensagem: </strong> $msg";

    $header = "Content-Type: text/html; charset=utf-8\n";
    $header .= "From: $email Reply-to: $email\n";
    
@mail($para, $assunto, $corpo, $header);

header("location:index.php?msg=enviado");

?>