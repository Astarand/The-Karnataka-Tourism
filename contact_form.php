<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['number']; // Fixed: Use 'number' as the name of the phone input
    $message = $_POST['message'];
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    // Validate reCAPTCHA
    $recaptchaSecret = "6LeRnooqAAAAAMiGd7vJgrkhA7iuaL_EcUUVDamr";
    $recaptchaURL = "https://www.google.com/recaptcha/api/siteverify";
    $response = file_get_contents($recaptchaURL . "?secret=" . $recaptchaSecret . "&response=" . $recaptchaResponse);
    $responseKeys = json_decode($response, true);

    if (intval($responseKeys["success"]) !== 1) {
        // If reCAPTCHA validation fails, redirect to an error page
        header("Location: error.php?error=captcha");
        exit;
    }

    // Set recipient email address
    $to = "travelkarnataka@gmail.com";

    // Set email subject
    $subject = "New message from $name";

    // Compose email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Message:\n$message\n";

    // Set headers for recipient email
    $headers = "From: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    // Send email to recipient
    $mail_sent_to_recipient = mail($to, $subject, $email_message, $headers);

    if ($mail_sent_to_recipient) {
        // Compose greeting email message for the sender
        $sender_subject = "Greetings from The Karnataka Tourism!";
        $sender_message = "<html><body>";
        $sender_message .= "<h1>Dear $name,</h1>";
        $sender_message .= "<p>Thank you for contacting us. We have received your message and will get back to you as soon as possible.</p>";
        $sender_message .= "<p>Best regards,<br>The Karnataka Tourism</p>";
        $sender_message .= "</body></html>";

        // Set headers for sender email
        $sender_headers = "MIME-Version: 1.0\r\n";
        $sender_headers .= "Content-type:text/html;charset=UTF-8\r\n";
        $sender_headers .= "From: The Karnataka Tourism <book@thekarnatakatourism.com>\r\n";

        // Send email to the sender
        $mail_sent_to_sender = mail($email, $sender_subject, $sender_message, $sender_headers);

        if ($mail_sent_to_sender) {
            // If mail is sent successfully to the sender
            // Redirect to success page
            header("Location: success.php");
            exit;
        } else {
            // If an error occurred while sending mail to the sender
            // Redirect to error page
            header("Location: error.php");
            exit;
        }
    } else {
        // If an error occurred while sending mail to the recipient
        // Redirect to error page
        header("Location: error.php");
        exit;
    }
}
