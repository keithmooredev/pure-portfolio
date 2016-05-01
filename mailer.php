<?php
   require_once("/usr/share/php/libphp-phpmailer/class.phpmailer.php");
   $mail = new PHPMailer(); // defaults to using php "mail()"
   $body = $_POST["message"];
   $mail->AddReplyTo("keith.m4@gmail.com","Keith Moore");
   $mail->SetFrom($_POST["email"], $_POST["name"]);
   $address = "keith.m4@gmail.com";
   $mail->AddAddress($address, "Keith Moore");
   $mail->Subject = "New message from kdavidmoore.com";
   $mail->MsgHTML($body);
   if(!$mail->Send()) {
   echo "Mailer error: " . $mail->ErrorInfo;
   } else {
   echo "Message sent!";
   }
