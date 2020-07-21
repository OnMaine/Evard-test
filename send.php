<?php
// несколько получателей
$to  = 'onmaine@gmail.com' . ', ';
$to .= 'onmaine2@gmail.com';

// тема письма
$subject = 'Письмо по ТЗ Everad Василенко';

// текст письма
$message = '<br />' . 'Пользователь: ' . $_POST['username'] . '<br /> Номер телефона:' . $_POST['phone_number'];

// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Дополнительные заголовки
$headers .= 'everad-test.hhos.ru.s50.hhos.ru' . "\r\n"; // Свое имя и email
$headers .= 'From: '  . $_POST['username'] . '<' . $_POST['email'] . '>' . "\r\n";


// Отправляем
mail($to, $subject, $message, implode("\r\n", $headers));
?>
