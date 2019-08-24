<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new phpmailer;
$mail->CharSet = 'utf-8';
$mail->ErrorInfo;

    $name = $_POST['user__name'];
    $email = $_POST['user__email'];
    $subject = $_POST['user__subject'];
    $company = $_POST['company__name'];

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  						  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'lbfwebfo1@gmail.com';                // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'rKH734WCXUdKet7';                  // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'TLS';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('lbfwebfo1@gmail.com');                // от кого будет уходить письмо?
$mail->addAddress('forps4slim1@mail.ru');             // Кому будет уходить письмо 
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с тестового сайта';
$mail->Body    = '' .$name . ' оставил заявку, с названием его компании - ' .$company. '<br>Почта этого пользователя: ' .$email;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: qq.html');
}
?>