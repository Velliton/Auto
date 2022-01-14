<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->CharSet='UTF-8';
$mail->setLanguage('ru', 'phpmailer/language/');
$mail->IsHTML(true);

$mail->setFrom('evg92faut@gmail.com','dsfsdf');
$mail->addAddress('evg92faut@gmail.com');
$mail->Subject='sdfsdfsdf';

	$body = '<h1>Заявка:</h1>';

	if(trim(!empty($_POST['name']))){
		$body.='<p><strong>Имя:</strong> '.$_POST['name'].'</p>';
	}

	if(trim(!empty($_POST['email']))){
		$body.='<p><strong>E-mail:</strong> '.$_POST['email'].'</p>';
	}

	if(trim(!empty($_POST['message']))){
		$body.='<p><strong>Сообщение:</strong> '.$_POST['message'].'</p>';
	}

$mail->Body = $body;

if (!$mail->send()) {
	$message='ошибка бл';
} else {
	$message='данные отправлены';
}

$response = ['message'=>$message];
header('Content-type: application/json');
echo json_encode($response);

?>