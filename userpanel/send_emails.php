<?php
require_once './vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
    ->setUsername("ENTER YOUR EMAIL ADDRESS HERE")
    ->setPassword("ENTER YOUR TEMPORARY PASSWORD HERE");

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

function sendVerificationEmail($userEmail, $token)
{
    global $mailer;
    $body = '<!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <title>Test mail</title>
    </head>

    <body>
      <p>Hello User,</p>
      </br>
      <p>Thank you for signing up on our site. Please click on the link below to verify your account:.</p>
      <a href="http://localhost/hello-app/userpanel/verify_email.php?token=' . $token . '">Verify your Email</a>
    </body>

    </html>';

    // Create a message
    $message = (new Swift_Message('Verify your email'))
        ->setFrom("ENTER YOUR EMAIL ADDRESS HERE")
        ->setTo($userEmail)
        ->setBody($body, 'text/html');

    // Send the message
    $result = $mailer->send($message);

    if ($result > 0) {
        return true;
    } else {
        return false;
    }
}

function sendPasswordResetLink($userEmail, $token) 
{
  global $mailer;
    $body = '<!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <title>Test mail</title>
      
    </head>

    <body>
      <p><strong>Hello User,</strong></p>
      </br>
      <p>Please click on the link below to reset your password.</p>
      <a href="http://localhost/hello-app/userpanel/logged_in.php?password-token=' . $token . '">Reset your Password</a>
    </body>

    </html>';

    // Create a message
    $message = (new Swift_Message('Reset your Password'))
        ->setFrom("ENTER YOUR EMAIL ADDRESS HERE")
        ->setTo($userEmail)
        ->setBody($body, 'text/html');

    // Send the message
    $result = $mailer->send($message);

    if ($result > 0) {
        return true;
    } else {
        return false;
    }
}