<?php
//Отправка спама от робота

$post = (!empty($_POST)) ? true : false;

if($post)
{
    $email = trim($_POST['email']);
    $name = htmlspecialchars($_POST['name']);
    $tel = htmlspecialchars($_POST["phone"]);
    $error = '';

    $name_tema = "=?utf-8?b?". base64_encode($name) ."?=";

    $subject ="Спам с сайта coverzaband.ru";
    $subject1 = "=?utf-8?b?". base64_encode($subject) ."?=";

    $message1 ="\n\nИмя: ".$name."\n\nТелефон: " .$tel."\n\n";	


    $header = "Content-Type: text/plain; charset=utf-8\n";

    $header .= "From: Спам от робота <spam@coverza.ru>\n\n";	
    $mail = mail("spam@coverza.ru", $subject1, iconv ('utf-8', 'windows-1251', $message1), iconv ('utf-8', 'windows-1251', $header));

    if($mail)
    {
        exit();
    }

}

?>