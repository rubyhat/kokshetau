<?php

/* https://api.telegram.org/bot1245668404:AAEd-mHTIUwNvF9paY445nAowJx-SF7DxZI/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$token = "1245668404:AAEd-mHTIUwNvF9paY445nAowJx-SF7DxZI";
$chat_id = "-408706001";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Дата заказа: ' => date("m.d.Y")
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: https://simpleweb.kz');
  //echo '<h1> Thank you!</h1>';
} else {
  echo "Error";
}
?>