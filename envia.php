<?php

$nome = addslashes($_POST['nome']);
$email = addcslashes($_POST['email']);
$celular = addcslashes($_POST['celular']);
$mensagem = addcslashes($_POST['mensagem']);
$para = "rickmygiliard@gmail.com";
$assunto = = "coleta de dados - Portifólio";

$corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$celular."\n"."Mensagem: ".$mensagem;

$cabeca = "From: rickmycf@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("email enviado com o sucesso");
}else{
    echo("houve um erro");
}

?>