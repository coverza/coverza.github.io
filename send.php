<?php

$post = (!empty($_POST)) ? true : false;

if($post)
{

$name = htmlspecialchars($_POST['name']);
$tariff = htmlspecialchars($_POST['check']);
$tel = htmlspecialchars($_POST["phone"]);
$error = '';

if(!$name)
{
$error .= 'Пожалуйста введите ваше имя<br />';
}

if(!$error)
{


$name_tema = "=?utf-8?b?". base64_encode($name) ."?=";

$subject ="Новая заявка с сайта coverzaband.ru";
$subject1 = "=?utf-8?b?". base64_encode($subject) ."?=";
/*
$message ="\n\nСообщение: ".$message."\n\nИмя: " .$name."\n\nТелефон: ".$tel."\n\n";
*/
$message1 ="\n\nИмя: ".$name."\n\nТелефон: " .$tel."\n\nТариф: " .$tariff."\n\n";	


$header = "Content-Type: text/plain; charset=utf-8\n";

$header .= "From: Новая заявка с сайта <coverzaband@gmail.com>\n\n";	
$mail = mail("coverzaband@gmail.com", $subject1, iconv ('utf-8', 'windows-1251', $message1), iconv ('utf-8', 'windows-1251', $header));

if($mail)
{
header ('Location: spasibo');
exit();
}

}
else
{
echo '<div class="notification_error">'.$error.'</div>';
}

}
?>