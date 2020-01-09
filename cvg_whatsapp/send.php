<?php

# Informações do cliente - do Formulário HTML
$email = $_POST['email'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$empresa =$_POST ['empresa'];
$solucao = $_POST['solucao'];
# FIM DAS INFORMAÇÕES DO CLIENTE   
 
// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php 
include "PHPMailer-master/PHPMailerAutoload.php"; 
 
// Inicia a classe PHPMailer 
$mail = new PHPMailer(); 
 
// Método de envio 
$mail->IsSMTP(); 
 
// Enviar por SMTP 
$mail->Host = "smtp.kinghost.net"; 

// Tipo de encriptação que será usado na conexão SMTP
//$mail->SMTPSecure = 'ssl';
 
// Você pode alterar este parametro para o endereço de SMTP do seu provedor 
$mail->Port = 587; 
 
 
// Usar autenticação SMTP (obrigatório) 
$mail->SMTPAuth = true; 
 
// Usuário do servidor SMTP (endereço de email) 
// obs: Use a mesma senha da sua conta de email 
$mail->Username = 'vinicius.lima@convergemarketing.com.br'; 
$mail->Password = 'vini8810'; 
 
// Configurações de compatibilidade para autenticação em TLS 
$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 
 
// Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro. 
 //$mail->SMTPDebug = 2; 
 
// Define o remetente 
// Seu e-mail 
$mail->From = "vinicius.lima@convergemarketing.com.br"; 
 
// Seu nome 
$mail->FromName = "Site Whatsapp"; 
 
// Define o(s) destinatário(s) 
$mail->AddAddress('vinicius.lima@convergemarketing.com.br'); 
 
// Opcional: mais de um destinatário
// $mail->AddAddress('fernando@email.com'); 
 
// Opcionais: CC e BCC
// $mail->AddCC('joana@provedor.com', 'Joana'); 
// $mail->AddBCC('roberto@gmail.com', 'Roberto'); 
 
// Definir se o e-mail é em formato HTML ou texto plano 
// Formato HTML . Use "false" para enviar em formato texto simples ou "true" para HTML.
$mail->IsHTML(true); 
 
// Charset (opcional) 
$mail->CharSet = 'UTF-8'; 
 
// Assunto da mensagem 
$mail->Subject = "Leads CVG Solutions"; 
 
// Corpo do email 
$mail->Body = "Olá Rogério, segue lead coletado no site do <strong>CVG Solution:</strong><br>
                <br>Nome: $nome <br> 
                <br>Telefone: $telefone<br>
                <br>Empresa: $empresa <br>
                <br>E-mail: $email <br>
                <br>Solução de interesse: $solucao";
 
// Opcional: Anexos 
// $mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 
 
// Envia o e-mail 
$enviado = $mail->Send(); 
 
// Exibe uma mensagem de resultado 
if ($enviado) 
{ 
    Header( 'Location: http://localhost/webProjects/cvg_whatsapp/' );
} else { 
    echo "Houve um erro ao enviar o formulário: ".$mail->ErrorInfo; 
} 
 
 
?>