<?php
    $name = $_POST['name'];
    $from = $_POST['email'];
    $message = $_POST['message']; 
    $to = 'maverick88xx@gmail.com'; 

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit']) {
        if (mail ($to, $body, $email)) { 
            echo '<p style="color: #27ae60;">Your message has been sent!</p>';
        } else { 
            echo '<p style="color: #c0392b;">Something went wrong, go back and try again!</p>'; 
        }
    }