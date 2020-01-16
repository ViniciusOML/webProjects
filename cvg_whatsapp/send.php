<?php

# Informações do cliente - do Formulário HTML
$email = $_POST['email'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$empresa =$_POST ['empresa'];
$solucao = $_POST['solucao'];
# FIM DAS INFORMAÇÕES DO CLIENTE   

# INICIO: Informações do remetente
$senha = 'Cvg340397';
$nomeRemetente = 'Converge Marketing';
$emailRemetente = 'convergemkt01@gmail.com';
$titulo = 'Teste de envio PHPMAILER';
# FIM: Informações do remetente

#DESTINATARIO
$emailDestinatario = 'vinicius.lima@convergemarketing.com.br';

#MENSAGEM

// Caminho da biblioteca PHPMailer
require 'PHPMailer-master/PHPMailerAutoload.php';

// Instância do objeto PHPMailer
$mail = new PHPMailer;

// Configura para envio de e-mails usando SMTP
$mail->isSMTP();

// Servidor SMTP
$mail->Host = 'smtp.gmail.com';

// Usar autenticação SMTP
$mail->SMTPAuth = true;

// Usuário da conta
$mail->Username = $emailRemetente;

// Senha da conta
$mail->Password = $senha;

// Tipo de encriptação que será usado na conexão SMTP
$mail->SMTPSecure = 'ssl';

// Porta do servidor SMTP
$mail->Port = 465;

// Informa se vamos enviar mensagens usando HTML
$mail->IsHTML(true);

// Email do Remetente(tem que ser o mesmo usado no usuario da conta)
$mail->From = $emailRemetente;

// Nome do Remetente
$mail->FromName = $nomeRemetente;

// Endereço do e-mail do destinatário
$mail->addAddress($emailDestinatario);

// Assunto do e-mail
$mail->Subject = $titulo;

// Mensagem que vai no corpo do e-mail
$mensagem = ' Olá Rogério, segue líder coletado no site do <strong> Solução CVG: </strong> <br>
<br> Nome: $ nome <br>
<br> Telefone: $ telefone <br>
<br> Empresa: $ empresa <br>
<br> E-mail: $ email <br>
<br> Solução de interesse: $ solucao ';

$mail->Body = $mensagem;

$mail->SMTPDebug  = 2;
echo '<pre>';
var_dump($mail->Send());
// Envia o e-mail e captura o sucesso ou erro
if ($mail->Send()) {
    $enviado = true;
} else {
    $enviado = false;
}
