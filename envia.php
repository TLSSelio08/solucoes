
<?php

    $nome = addslashes($_POST['nome']);
    $empresa = addslashes($_POST['empresa']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $mensagem = addslashes($_POST['mensagem']);

    $para = "thais.lima.selio@gmail.com";
    $assunto = "Contato - Soluções MPS";

    $corpo = "Nome: ".$nome."\n"."Empresa: ".$empresa."\n"."Email: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;

    $cabeca = "From: thata.selio@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("Email enviado com sucesso!");
    }else{
        echo("houve um erro ao enviar o email!");
    }

?>
