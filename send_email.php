<?php
require 'path/to/PHPMailerAutoload.php';

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$message = $_POST['message'];

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.example.com';  // Specify your SMTP server
$mail->SMTPAuth = true;
$mail->Username = 'your_email@example.com';  // Your SMTP username
$mail->Password = 'your_password';  // Your SMTP password
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('your_email@example.com', 'Your Name');  // Sender's email and name
$mail->addAddress('email@mozfire.com');  // Recipient's email

$mail->isHTML(true);
$mail->Subject = 'New Contact Form Submission';
$mail->Body = "<p>Name: $name</p>
               <p>Username: $username</p>
               <p>Email: $email</p>
               <p>Phone: $phone</p>
               <p>Country: $country</p>
               <p>Message: $message</p>";

if ($mail->send()) {
    echo 'Message sent successfully.';
} else {
    echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
}
?>
