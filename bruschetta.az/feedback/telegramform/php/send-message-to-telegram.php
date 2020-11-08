<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$date = $_POST['date'];
// $quantity = $_POST['quantity'];
// $time1 = $_POST['time1'];

$token = "1320327012:AAHVCN_NrlgamwK6iJRwophlDe8PPqs2Sko";

$chat_id = "-1001284410458";


$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email,
  'Сообщение: ' => $date,
 // 'Время: ' => $time1,
 // 'Количество посетителей: ' => $quantity
);


foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};


$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

header('location: http://degrees/bruschetta.az/az.html#contacts');

?>