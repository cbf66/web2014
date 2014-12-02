<?php
    echo("Testing");
    $to      = 'arkazex@gmail.com';
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: Phil_Golando@newton.k12.ma.us' . "\r\n" .
    'Reply-To: Phil_Golando@newton.k12.ma.us' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    if(mail($to, $subject, $message, $headers)) {
        echo("Success");
    } else {
        echo("Failure");
    }
?>