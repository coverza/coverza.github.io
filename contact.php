<?php
// Отправка заявки с контактов
$post = (!empty($_POST)) ? true : false;

$check = $_POST['check'];
$error = 'Что-то пошло не так!';

if($post && $check=='secretcode')
{
    $email = trim($_POST['email']);
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['mail']);
    $message = htmlspecialchars($_POST['message']);
    $date = htmlspecialchars($_POST['date']);

    $name_tema = "=?utf-8?b?". base64_encode($name) ."?=";

    $subject ="Новая заявка с контактов";
    $subject1 = "=?utf-8?b?". base64_encode($subject) ."?=";
    $message1 ="\n\nИмя: ".$name."\n\nE-mail: " .$email."\n\nДата мероприятия: " .$date."\n\nСообщение: ".$message."\n\n";	

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
?>