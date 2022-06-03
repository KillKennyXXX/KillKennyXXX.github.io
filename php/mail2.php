<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$i = $_POST['Input1'];
$i2 = $_POST['Input2'];
$i3 = $_POST['Input3'];
$i4 = $_POST['Input4'];
$i5 = $_POST['Input5'];
$i6 = $_POST['Input6'];
$i7 = $_POST['Input7'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.beget.com';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'mail@maximandkristina.website'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'Site22!'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('mail@maximandkristina.website'); // от кого будет уходить письмо?
$mail->addAddress('mail2@maximandkristina.website');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Свадьба Кристины и Максима';
$mail->Body    = $i.' принял участие в опросе:<br>Контактный телефон и электронный адрес:<br>'.$i2.
'<br>Планируете ли вы воспользоваться услугой трансфера или приедете на свадьбу самостоятельно?:<br>'.$i3.
'<br>Если вы приезжаете из другого города или страны, желаете ли вы, чтобы мы организовали для вас обзорную экскурсию по Москве накануне свадьбы (6 сентября 2022)?:<br>'.$i4.
'<br>Вы поможете нам составить наиболее привлекательную музыкальную программу, если напишете название одной или нескольких из ваших любимых музыкальных композиций:<br>'.$i5.
'<br>Какие алкогольные напитки вы предпочитаете: шампанское, белое вино, красное вино, водка, виски?:<br>'.$i6.
'<br>Если мы что-то не учли или у вас есть дополнительные вопросы, пожалуйста, напишите здесь:<br>'.$i7.'<br>';
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    echo 'success';
}
?>