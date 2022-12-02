<?php
    $name = $_POST['name']
    $email = $_POST['email']
    $phone = $_POST['phone'];


    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $phone = htmlspecialchars($phone);



    $name = urldecode($name);
    $email = urldecode($email);
    $phone = urldecode($phone);


    $name = trim($name);
    $email = trim($email);
    $phone = trim($phone);


    if (mail("ayubkhan.khakimov@mail.ru",
            "Новое письмо с сайта",
            "Имя: " .$name."\n".
            "Эл.почта: " .$email."\n".
            "Номер: " .$phone."\n".
            "From: a0464833.ru \r\n")
        ) {
            echo ('<script>alert("Спасибо за отлик, скоро мы вам ответим")</script>');   
        }
        else {
            echo ('<script>alert("Извините есть ошибки в отлик")</script>');   
        }
?>