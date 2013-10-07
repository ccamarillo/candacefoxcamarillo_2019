<?php
    $to = 'candace.fox.camarillo@gmail.com';
    error_log(print_r($_POST, 1));
    $from = $_POST['email'];
    $message = $_POST['message'];
    $headers = 'From: candace.fox.camarillo@gmail.com' . "\r\n" .
    'Reply-To: ' . $from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    
    try {
        if (mail($to, 'Email from your portfolio site', 'Email sent from <' . $from . '>: ' . $message, $headers)) { 
            echo '1';
        } else { 
            echo 'Unable to email message.';
        }
    } catch (Exception $e) { 
        echo 'Something went wrong.';
        error_log('Unable to send message: ' . $e->getMessage());
    }
?>
