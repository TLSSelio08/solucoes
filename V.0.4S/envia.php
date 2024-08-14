
<?php

    $nome = addslashes($_POST('nome'));
    $empresa = addslashes($_POST('empresa'));
    $email = addslashes($_POST('email'));
    $telefone = addslashes($_POST('telefone'));
    $mensagem = addslashes($_POST('mensagem'));

    $destino = "thais.lima.selio@gmail.com";
    $assunto = "cliente Soluções MPS";

    $corpo = "Nome: ".$nome."\n"."Empresa: ".$empresa."\n"."Email: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;

    $cabeca = "From thata.selio@gmail.com"."\n"."reply-to:".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($destino,$assunto,$corpo,$cabeca)){
        echo("Email enviado com sucesso!");
    }else{
        echo("Honve um erro ao enviar o email!");
    }

?>
