<?php
php.validate.executablepath

if(isset($_POST['email']) && !empty($_POST['email'])) {


//variaveis
$nome = addcslashes($_POST['nome']);
$email = addcslashes($_POST['email']);
$tel = addcslashes($_POST['tel']);
$mensagem = addcslashes($_POST['mensagem']);


$to = 'eubonfimlucas@gmail.com';
$subject = 'Contato - Barbearia';
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Telefone: ".$tel. "\r\n".
        "Mensagem: ".$mensagem;

$header = "From:lucasbonfim999@gmail.com". "\r\n".
        "Reply-To:".$email."\r\n". 
        "X=Mailer:PHP".phpversion();

if(mail($to, $subject, $body, $header)) {
    echo("Email enviado com sucesso!");
}else{
    echo("Não foi possível enviar o email!");
}
   
}

?>