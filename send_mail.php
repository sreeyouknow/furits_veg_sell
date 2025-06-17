<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']));

    if (empty($name) || empty($email) || empty($message)) {
        header("Location: contact.php?status=error&message=" . urlencode("Please fill in all required fields."));
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: contact.php?status=error&message=" . urlencode("Invalid email address."));
        exit();
    }

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@agrodeltamisr.com'; 
        $mail->Password   = 'Tax@$2025';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom('info@agrodeltamisr.com', 'agrodeltamisr');
        $mail->addAddress('info@agrodeltamisr.com');
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body    = "<p><strong>Name:</strong> $name</p>
                          <p><strong>Email:</strong> $email</p>
                          <p><strong>Message:</strong> $message</p>";
        $mail->AltBody = "Name: $name\nEmail: $email\nMessage: $message";

        $mail->send();
        header("Location: contact.php?status=success&message=" . urlencode("Message has been sent successfully."));
        exit();
    } catch (Exception $e) {
        // Redirect to show a detailed error if sending fails
        header("Location: contact.php?status=error&message=" . urlencode("Mailer Error: " . $mail->ErrorInfo));
        exit();
    }
} else {
    header("Location: contact.php?status=error&message=" . urlencode("Invalid request method."));
    exit();
}
?>
