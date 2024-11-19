<?php
require './PHPMailer-master/src/PHPMailer.php';
require './PHPMailer-master/src/Exception.php';
require './PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(strip_tags($_POST['name']));

    if (empty($name)) {
        echo "Name is required.";
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'b8.bonzark@gmail.com';
        $mail->Password = 'vegw okci xeaq jgny';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom('b8.bonzark@gmail.com', 'Your Name');
        $mail->addAddress('b8.bonzark@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'New Form Submission';
        $mail->Body = "<h4>You have a new form submission</h4>
                       <p><strong>Name:</strong> $name</p>";

        $mail->send();
        echo "Message sent successfully!";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request.";
}
?>