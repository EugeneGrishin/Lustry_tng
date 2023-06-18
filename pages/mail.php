<?php
    $address = 'lustry.tgn1@gmail.com';
    $subject = 'Заявка';
    $name = $_POST['username'];
    $email = $_POST['useremail'];
    $phone = $_POST['userphone'];
    $subject = $subject . $email;
    $message = 'Пришла новая заявка от' . $name . '. Электронная почта клиента: ' . $email;
    mail($address, $subject, $message);
    echo 'OK';
    exit;
?>
