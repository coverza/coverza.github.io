<?php

$post = (!empty($_POST)) ? true : false;

$check = $_POST['check'];

if($post && $check=='secretcode')
{
$email = trim($_POST['email']);
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['mail']);
$message = htmlspecialchars($_POST['message']);
$error = '';

if(!$name)
{
$error .= 'Пожалуйста введите ваше имя<br />';
}

// Проверка телефона
function ValidateTel($valueTel)
{
$regexTel = "/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";
if($valueTel == "") {
return false;
} else {
$string = preg_replace($regexTel, "", $valueTel);
}
return empty($string) ? true : false;
}
if(!$email)
{
$error .= "Пожалуйста введите email<br />";
}
if($email && !ValidateTel($email))
{
$error .= "Введите корректный email<br />";
}
if(!$error)

// (length)
if(!$message || strlen($message) < 1)
{
$error .= "Введите ваше сообщение<br />";
}
if(!$error)
{


$name_tema = "=?utf-8?b?". base64_encode($name) ."?=";

$subject ="Новая заявка с сайта coverzaband.ru";
$subject1 = "=?utf-8?b?". base64_encode($subject) ."?=";
$message1 ="\n\nИмя: ".$name."\n\nE-mail: " .$email."\n\nСообщение: ".$message."\n\n";	

$header = "Content-Type: text/plain; charset=utf-8\n";

$header .= "From: Новая заявка <info@coverza.ru>\n\n";	
$mail = mail("info@coverza.ru", $subject1, iconv ('utf-8', 'windows-1251', $message1), iconv ('utf-8', 'windows-1251', $header));

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