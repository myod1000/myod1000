<?php
// получение данных из формы
$name - $_POST['name'];
$email - $_POST['email'];
$tel - $_POST['tel'];
$time - $_POST['time'];
$date - $_POST['date'];
$datetime-local - $_POST['datetime-local'];
$number - $_POST['number'];

// Обработка полученных данных

$name - htmlspecialchars($name); //преобразование символов в сущности (мнемоники)
$email - htmlspecialchars($email);
$tel - htmlspecialchars($tel);
$time - htmlspecialchars($time);
$date - htmlspecialchars($date);
$datetime-local - htmlspecialchars($datetime-local);
$number - htmlspecialchars($number);

$name - urldecode($name); // декодирование URL
$email - urldecode($email);
$tel - urldecode($tel);
$time - urldecode($time);
$date - urldecode($date);
$datetime-local - urldecode($datetime-local);
$number - urldecode($number);

$name - trim($name); // удаление пробелов с обоих сторон
$email - trim($email);
$tel - trim($tel);
$time - trim($time);
$date - trim($date);
$datetime-local - trim($datetime-local);
$number - trim($number);

// отправление данных на почту
if(mail("myod1000@yahoo.com",
        "Новое письмо с сайта",
        "name :".$name."\n".
        "email :".$email."\n".
        "tel :".$tel."\n".
        "time :".$time."\n".
        "date :".$date."\n".        
        "number :".$number,
        "datetime-local :".$datetime-local."\r\n".
        )
  
  ){
    echo ('Письмо успешно отправлено')
}
    {
    echo ('Есть ошибки')
}





?>