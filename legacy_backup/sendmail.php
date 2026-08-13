<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['Cfname']) && isset($_POST['Clname']) && isset($_POST['Cmail']) && isset($_POST['Csubject']) && isset($_POST['Cmessage'])) {
    $firstName = htmlspecialchars($_POST['Cfname']);
    $lastName = htmlspecialchars($_POST['Clname']);
    $email = filter_var($_POST['Cmail'], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars($_POST['Csubject']);
    $message = htmlspecialchars($_POST['Cmessage']);
    $department = filter_var($_POST['department'], FILTER_SANITIZE_EMAIL);

    if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($subject) && !empty($message) && !empty($department)) {
        $fullName = $firstName . " " . $lastName;

        $mail = new PHPMailer(true);
        
        try {
            // Configure PHPMailer
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->Host = 'smtp.gmail.com';
            $mail->Username = 'chigoziedomnic@gmail.com';
            $mail->Password = 'rgtc fuef ldfb djoe';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
            $mail->Port = 587;

            // Sender and recipient details
            $mail->setFrom('chigoziedomnic@gmail.com', $fullName);
            $mail->addAddress($department);

            // Email content
            $mail->isHTML(true);
            $mail->Subject = 'A new mail from '. $fullName .'';
            $mail->Body = '<h3>Hello, You have a new mail from '.$fullName.'</h3>
                <h1>Name: ' . $fullName . '</h1>
                <h2>Subject: ' . $subject . '</h2>
                <h4>Email: ' . $email . '</h4>
                <p>Message: ' . $message . '</p>';

            // Send email
            if ($mail->send()) {
                $_SESSION['status'] = "Thank you for contacting us - Eastern Distilleries & Food Industries LTD";
            } else {
                $_SESSION['status'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }

        } catch (Exception $e) {
            $_SESSION['status'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        // Redirect to contact.php
        header('Location: contact.php');
        exit;
    } else {
        $_SESSION['status'] = "Error: Please make sure you fill all the required fields.";
    }
} else {
    $_SESSION['status'] = "Error: Missing required POST parameters.";
}

// Redirect to contact.php in case of errors
header('Location: contact.php');
exit;