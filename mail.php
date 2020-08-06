<?php

require_once('phpmailer/PHPMailerAutoload.php');

//PHPMailer Object
$mail = new PHPMailer;

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "email invalid...\n";
    exit;
}




//From email address and name
$mail->From = "calibri604@calibri.ca";
$mail->FromName = "Calibri Design";

//To address and name
$mail->addAddress("barkalov.dan@gmail.com", "Boris Parfyonov");

// echo 456;
// exit;
//Address to which recipient will reply
// $mail->addReplyTo("reply@yourdomain.com", "Reply");

//CC and BCC
// $mail->addCC("cc@example.com");
// $mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email



$mail->isHTML(true);

$mail->Subject = "New Message from your website";
$mail->Body = 'Name: ' .$name .
              '<br>Phone: ' .$phone.
              '<br>Email: ' .$email.
              '<br>Message: ' .$message;

$mail->AltBody = "<br> Calibri Design Inc.";

if(!$mail->send())
{
    echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
    echo "Message has been sent successfully";
}

exit;

// $mail = new PHPMailer;
// $mail->CharSet = 'utf-8';

// $name = $_POST['name'];
// $phone = $_POST['phone'];
// $email = $_POST['email'];
// $file = $_POST['file'];



// //$mail->SMTPDebug = 3;

// $mail->isSMTP();
// $mail->Host = 'smtp.gmail.com';
// $mail->SMTPAuth = true;
// $mail->Username = 'smtp.barkalov.dan@gmail.com';
// $mail->Password = 'danil030959';
// $mail->SMTPSecure = 'ssl';
// $mail->Port = 465;

// $mail->setFrom('smtp.barkalov.dan@gmail.com');
// $mail->addAddress('rodion193993@gmail.com');
// //$mail->addAddress('ellen@example.com');
// //$mail->addReplyTo('info@example.com', 'Information');
// //$mail->addCC('cc@example.com');
// //$mail->addBCC('bcc@example.com');
// //$mail->addAttachment('/var/tmp/file.tar.gz');
// //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');
// $mail->isHTML(true);

// $mail->Subject = 'Заявка с тестового сайта';
// $mail->Body    = '' .$name . ' оставил заявку, его телефон ' .$phone. '<br>Почта этого пользователя: ' .$email. '<br>Его прикрепленные файлы: ' .$file ;
// $mail->AltBody = '';

// if(!$mail->send()) {
//     echo 'Error';
// } else {
//     header(text(Спасибо));
// }
// ?>