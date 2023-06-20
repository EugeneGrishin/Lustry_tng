<?php
    $address = 'lustry_tgn1@mail.ru';
    $subject = 'Заявка';
    $name = $_POST['username'];
    $email = $_POST['useremail'];
    $phone = $_POST['userphone'];
    $msg = $_POST['usermsg'];
    $subject = $subject . $email;
    $message = 'Пришла новая заявка от' . $name . '. Электронная почта клиента: ' . $email . '. Номер телефона: ' . $phone . $msg ;
    mail($address, $subject, $message);
    exit;
?>
