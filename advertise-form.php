<?php
    session_start();
    $to = "clayphillipp@gmail.com";
    $subject = "Contact Us";
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
        header('Location: advertise.php#bottom');
    }
    else{
        $_SESSION['message'] = 'Sorry, there was a problem. Please try again.';
        header('Location: advertise.php#bottom');
    }
?>