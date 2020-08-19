<?php


if(isset($_POST(['email']) && !empty($_POST['email']))){

$nome = addslashes($_POST(['name']));
$email = addslashes($_POST(['email']));
$mensagem = addslashes($_POST(['message']));


$to = "josluiz55@hotmail.com";
$subject = "Contato - Programador";
$body = "Nome: ".$nome. "\n"
        "Email: ".$email. "\n"
        "Mensagem: ".$mensagem;
$header = "From:jojolili55@hotmail.com"."\r\n"
            ."Reply-To:".$email."\r\n"
            ."X=Mailer:PHP/".phpversion();
        
if(mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso!");

}
else{
    echo("O Email não pode ser enviado")";"
}



}

?>