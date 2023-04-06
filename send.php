<?php
// Отправка заявки с главной
$post = (!empty($_POST)) ? true : false;
$error = 'Что-то пошло не так!';

if($post)
{

    $name = htmlspecialchars($_POST['name']);
    $date = htmlspecialchars($_POST['date']);
    $tariff = htmlspecialchars($_POST['check']);
    $tel = htmlspecialchars($_POST["phone"]);

    $name_tema = "=?utf-8?b?". base64_encode($name) ."?=";

    $subject ="Новая заявка с главной";
    $subject1 = "=?utf-8?b?". base64_encode($subject) ."?=";

    $message1 ="\n\nИмя: ".$name."\n\nДата мероприятия: " .$date."\n\nТелефон: " .$tel."\n\nТариф: " .$tariff."\n\n";	


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