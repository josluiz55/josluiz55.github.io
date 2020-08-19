<?php


if(isset($_get(['email']) && !empty($_get['email']))){

$nome = addslashes($_get(['name']));
$email = addslashes($_get(['email']));
$mensagem = addslashes($_get(['message']));


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
