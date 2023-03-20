<?php

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$token = "6281834462:AAGe1_P1esZwDZE6vGOZDs-I-6yiuY4YAXg";
$chat_id = "-1001642142010";
$arr = array(
  'Пользователь' =>' оставил заявку на звонок',
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>