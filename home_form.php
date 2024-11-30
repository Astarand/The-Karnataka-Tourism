<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $resort = $_POST['resort'];
    $arrival_date = $_POST['arrival_date'];
    $departure_date = $_POST['departure_date'];
    $adult = $_POST['adult'];
    $children = isset($_POST['children']) ? $_POST['children'] : '';
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    // Validate reCAPTCHA
    $recaptchaSecret = "6LeRnooqAAAAAMiGd7vJgrkhA7iuaL_EcUUVDamr";
    $recaptchaURL = "https://www.google.com/recaptcha/api/siteverify";
    $response = file_get_contents($recaptchaURL . "?secret=" . $recaptchaSecret . "&response=" . $recaptchaResponse);
    $responseKeys = json_decode($response, true);

    if (intval($responseKeys["success"]) !== 1) {
        // If reCAPTCHA failed
        header("Location: error.php?error=captcha");
        exit;
    }

    // Set recipient email (admin)
    $to_admin = "travelkarnataka@gmail.com";
    $subject_admin = "New Resort Booking Form Submission";

    // Compose email for admin in table format
    $admin_message = "
    <html>
    <head>
    <style>
        h2 { text-align: center; }
        table { border-collapse: collapse; width: 80%; margin: 0 auto; }
        th, td { padding: 10px; text-align: left; border: 1px solid #dddddd; }
        th { background-color: #f2f2f2; }
    </style>
    </head>
    <body>
    <h2>New Resort Booking Form Submission</h2>
    <table>
        <tr><th>Field</th><th>Value</th></tr>
        <tr><td>Name:</td><td>$name</td></tr>
        <tr><td>E-mail:</td><td>$email</td></tr>
        <tr><td>Phone Number:</td><td>$phone</td></tr>
        <tr><td>Resort:</td><td>$resort</td></tr>
        <tr><td>Arrival Date:</td><td>$arrival_date</td></tr>
        <tr><td>Departure Date:</td><td>$departure_date</td></tr>
        <tr><td>Adult Count:</td><td>$adult</td></tr>
        <tr><td>Child Count:</td><td>$children</td></tr>
    </table>
    </body>
    </html>";

    // Set headers for admin email
    $headers_admin = "MIME-Version: 1.0\r\n";
    $headers_admin .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers_admin .= "From: $email\r\n";

    // Send email to admin
    $mail_sent_admin = mail($to_admin, $subject_admin, $admin_message, $headers_admin);

    // Now send email to user
    if ($mail_sent_admin) {
        $subject_user = "Thanks for Booking $resort";
        $user_message = "
        <html>
        <body>
            <h1>Dear $name,</h1>
            <p>Thanks for Booking $resort.</p>
            <p>Your Arrival Date: $arrival_date</p>
            <p>Your Departure Date: $departure_date</p>
            <p>Please note that this is an Automated Email to acknowledge receipt of your query and not a booking confirmation; please expect to hear from us within 24 working hours with a status update.</p>
            <p>In case you prefer to finalize your choice of itinerary immediately, we are eager to speak to you!</p>
            <p>Contact:</p>
            <ul>
                <li>Ramnath Sadekar: 09449244567</li>
                <li>Sanjay Bhat: 09902474761</li>
            </ul>
            <p>Yours sincerely,<br>The Karnataka Tourism</p>
            <p>Email: travelkarnataka@gmail.com</p>
        </body>
        </html>";

        // Set headers for user email
        $headers_user = "MIME-Version: 1.0\r\n";
        $headers_user .= "Content-type:text/html;charset=UTF-8\r\n";
        $headers_user .= "From: The Karnataka Tourism <book@thekarnatakatourism.com>\r\n";

        // Send email to the user
        $mail_sent_user = mail($email, $subject_user, $user_message, $headers_user);

        if ($mail_sent_user) {
            // Redirect to a success page after sending emails
            header("Location: success.php");
            exit;
        } else {
            // If the user email failed
            header("Location: error.php?error=user_email");
            exit;
        }
    } else {
        // If the admin email failed
        header("Location: error.php?error=admin_email");
        exit;
    }
}
