<?php

if ($_POST["submit"]) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $from = 'Kirby Contact Form';
    $to = 'enquiries@nchp.mn';
    $subject = 'Kirby Contact Form';

    $body = "Name: $name \n Email: $email \n Phone: $phone \n Message: $message";

    // Send the Email
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }

}
?>