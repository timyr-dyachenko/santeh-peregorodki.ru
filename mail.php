<?php

$recepient = "89256532438@mail.ru";
$sitename = "МирМеб Сантех-перегородки";
$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$text = trim($_POST["text"]);
$file = trim($_POST["file"]);
$message = "Имя: $name \n Телефон: $phone \nТекст: $text \nФайл: $file";
// $message = "Имя: $name \n Телефон: $phone \nТекст: $text";


$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");