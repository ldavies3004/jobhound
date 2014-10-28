<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Email sent! We will try getting back to you as soon as possible.'
	);

    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $subject = @trim(stripslashes($_POST['subject'])); 
    $message = @trim(stripslashes($_POST['message']));

    if(!isset($_POST['name'])) {
        $status['message'] = $_POST;
    }

    $email_from = $name . 'JobHound HP Contact Form <info@jobhound.co>';
    $email_to = 'ken@jobhound.co';

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: '.$email_from);

    echo json_encode($status);
    die; 
