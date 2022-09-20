<?php
$to = 'rk2018cs@gmail.com';
$subject = 'Test Mail';
$message = 'https://www.ingridkuhn.com/themes/abctots/index2.php'; 
$from = 'From: narzo2120@gmail.com';

// Sending email
if(mail($to, $subject, $message,$from)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>