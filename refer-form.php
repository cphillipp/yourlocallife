<?php
    session_start();
    $to = "admin@yourlocallife.com";
    $subject = "Referral Form";
    $email = $_POST['email'];
    $address = $_POST['address'];
    $message = $_POST['message'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $name . "\n ". $email . "\n ". $phone . "\n ". $address;
    $headers = "From: $email";
    $sent = mail($to, $subject, $message, $headers);
    if($sent) {
        $_SESSION['message'] = 'Thank You';
        header('Location: referral.php#bottom');
    }
    else{
        $_SESSION['message'] = 'Sorry, please try again.';
        header('Location: referral.php#bottom');
    }
?>