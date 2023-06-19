<?php
    $address = 'lustry_tgn1@mail.ru';
    $subject = 'Заявка';
    $name = $_POST['username'];
    $email = $_POST['useremail'];
    $phone = $_POST['userphone'];
    $subject = $subject . $email;
    $message = 'Пришла новая заявка от' . $name . '. Электронная почта клиента: ' . $email . '. Номер телефона: ' . $phone ;
    mail($address, $subject, $message);
    exit;
?>
