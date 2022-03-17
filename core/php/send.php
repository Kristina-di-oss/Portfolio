<?php
//получим данные с элементов формы
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

//обработаем полученные данные
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);

$name = trim($name);
$email = trim($email);
$message = trim($message);

$name = urldecode($name);
$email = urldecode($email);
$message = urldecode($message);


//отправляю полученные данные

if (mail("kristina.osinkina@mail.ru",
"Новое письмо с сайта",
"Логин: ".$name."\n".
"Эл.почта: ".$email."\n".
"Вопрос: ".$message."\n",
"From: no-reply@mydomain.ru \r\n")
){
echo('Письмо успешно отправлено!');
}
else{
echo('Есть ошибки! Проверьте данные...');
}
?>
