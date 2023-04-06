<?php
$file="stat.log";    // файл для записи истории посещения сайта
$col_zap=4999;    // ограничиваем количество строк log-файла 

function getRealIpAddr() {
  if (!empty($_SERVER['HTTP_CLIENT_IP']))        // Определяем IP
  { $ip=$_SERVER['HTTP_CLIENT_IP']; }
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
  { $ip=$_SERVER['HTTP_X_FORWARDED_FOR']; }
  else { $ip=$_SERVER['REMOTE_ADDR']; }
  return $ip;
}

if (strstr($_SERVER['HTTP_USER_AGENT'], 'YandexBot')) {$bot='YandexBot';} //Выявляем поисковых ботов
elseif (strstr($_SERVER['HTTP_USER_AGENT'], 'AdsBot')) {$bot='Googlebot';}
else { 
    
    $bot=$_SERVER['HTTP_USER_AGENT']; 

    $ip = getRealIpAddr();
    if($ip!='91.122.31.114')
    {
        $date = date("H:i:s d.m.Y");        // определяем дату и время события
        $home = $_SERVER['HTTP_REFERER'];   // определяем страницу сайта
        $lines = file($file);
        while(count($lines) > $col_zap) array_shift($lines);
        $lines[] = $date."|".$bot."|".$ip."|".$home."|\r\n";
        file_put_contents($file, $lines);
    }
}
?>