<?php
include(ROOT_PATH . "/app/controllers/users.php");
require_once 'vendor/autoload.php';


// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465 , 'ssl'))
  ->setUsername('mrinayawa99@gmail.com')
  ->setPassword('@mrina99@.com')
;
// Create the Mailer using your created Transport
 $mailer = new Swift_Mailer($transport);

function sendPasswordResetLink($userEmail, $token){
    // Create a message
   $body = '<!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <title>Reset password</title>
   </head>
   <body>
       <div class="wrapper">
           <p>
              hello there,

              please click on the link below to reset your password.
           </p>
           <a href="http://localhost/INTERNSHIP/index.php?token=' . $token . '">
               Reset your password
           </a>
       </div>
   </body>
   </html>';
   global $mailer;
   $message = (new Swift_Message('Reset your password'))
   ->setFrom(['mrinayawa99@gmail.com'])
   ->setTo([$userEmail])
   ->setBody($body, 'text/html')
  ;

 // Send the message
 $result = $mailer->send($message);
}

//reset password function

function resetPassword($token){
  global $conn;
  $sql = "select * from users where token='$token' limit 1";
  $result = mysqli_query($conn, $sql);
  $user = mysqli_fetch_assoc($result);
  $_SESSION['email'] = $user['email'];
  header('location: reset-password.php');
  exit(0);
}
