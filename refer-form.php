<?php
    session_start();
    $to = "clayphillipp@gmail.com";
    $subject = "Refer Form";
    $your = $_POST['yourEmail'];
    $there = $_POST['thereEmail'];
    $message = $your . "\n ". $there;
    $headers = "From: $email";
    $sent = mail($to, $subject, $message, $headers);
    if($sent) {
        $_SESSION['message'] = 'Thank You';
        header('Location: referral.php#bottom');
    }
    else{
        $_SESSION['message'] = 'Sorry, there was a problem. Please try again.';
        header('Location: referral.php#bottom');
    }
?>