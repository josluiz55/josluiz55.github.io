<?php


if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addcslashes ($_POST['name']);
$email = addcslashes ($_POST['email']);
$mensagem = addcslashes ($_POST['message']);


$to = "josluiz55@hotmail.com";
$subjet = "Contato - shokugeki";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email."\r\n".
        "Mensagem: ".$mensagem;
$header = "From:josluiz55@github.io"."\r\n".
            "Replay-To:".$email."\e\n".
            "X=Mailer:PHP/".phpversion();

if(mail($to,$subjet,$body,$header)){

    echo("Email enviado com sucesso!");

}else{
    echo("O Email não pode ser enviado");
}





}

?>