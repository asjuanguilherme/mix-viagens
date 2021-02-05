<?php

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

if( isset($_POST['action']) ) {
    $adults = $_POST['adults'];
    $kids = $_POST['kids'] ? $_POST['kids'] : ' ';
    $chekin = $_POST['chekin'];
    $chekout = $_POST['chekout'];
}

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;       
    $mail->isSMTP();                                    
    $mail->Host       = 'smtp.gmail.com';        
    $mail->SMTPAuth   = true;                             
    $mail->Username   = 'juantesteestagiomix@gmail.com';                   
    $mail->Password   = 'testeEstagio123';                              
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
    $mail->Port       = 587;                                   

    //Recipients
    $mail->setFrom('juantesteestagiomix@gmail.com', 'Juan Guilherme');
    $mail->addAddress('victor@mixinternet.com.br', 'João Victor');                          
    $mail->addAddress('asjuanguilherme@gmail.com', 'Juan');                          

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Reserva Confirmada';
    $mail->Body    = "
        <p>
            Uma nova reserva na Mix Viagens foi confirmada!
        </p>
        <p>
            <strong>Adultos: </strong>
            <span>$adults</span>
        <p>
        <p>
            <strong>Crianças: </strong>
            <span>$kids</span>
        <p>
        <p>
            <strong>Chek-in: </strong>
            <span>$chekin</span>
        <p>
        <p>
            <strong>Chek-in: </strong>
            <span>$chekout</span>
        <p>
    ";

    $mail->send();
    echo 'A mensagem foi enviada com sucesso!';
} catch (Exception $e) {
    echo "Não foi possivel enviar a mensagem: {$mail->ErrorInfo}";
}
