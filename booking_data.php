<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // reCAPTCHA validation
    $recaptchaResponse = $_POST['g-recaptcha-response'];
    $secretKey = '6LeRnooqAAAAAMiGd7vJgrkhA7iuaL_EcUUVDamr';
    $verifyUrl = "https://www.google.com/recaptcha/api/siteverify";

    $response = file_get_contents("$verifyUrl?secret=$secretKey&response=$recaptchaResponse");
    $responseKeys = json_decode($response, true);

    if (!$responseKeys['success']) {
        header("Location: error.php"); // Redirect to error page if reCAPTCHA fails
        exit;
    }

    // Form fields validation
    if (
        isset($_POST['resort']) && isset($_POST['arrival_date']) && isset($_POST['departure_date']) &&
        isset($_POST['adult']) && isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email'])
    ) {
        $admin_email = "travelkarnataka@gmail.com";
        $admin_subject = "New Booking Form Submission in The Karnataka Tourism";

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
                    <tr><td>Name:</td><td>{$_POST['name']}</td></tr>
                    <tr><td>E-mail:</td><td>{$_POST['email']}</td></tr>
                    <tr><td>Phone Number:</td><td>{$_POST['phone']}</td></tr>
                    <tr><td>Resort:</td><td>{$_POST['resort']}</td></tr>
                    <tr><td>Arrival Date:</td><td>{$_POST['arrival_date']}</td></tr>
                    <tr><td>Departure Date:</td><td>{$_POST['departure_date']}</td></tr>
                    <tr><td>Adult Count:</td><td>{$_POST['adult']}</td></tr>
                    <tr><td>Child Count:</td><td>" . (isset($_POST['children']) ? $_POST['children'] : '') . "</td></tr>
                    <tr>
                        <td>Travel Assistance:</td>
                        <td><strong>Flight</strong>: " . (isset($_POST['flight']) ? 'Yes' : 'No') .
            ", &nbsp; <strong>Pickup & Drop Service:</strong> " . (isset($_POST['pickupdrop']) ? 'Yes' : 'No') . "</td>
                    </tr>
                    <tr><td>Additional Note:</td><td>" . (isset($_POST['description']) ? $_POST['description'] : '') . "</td></tr>
                </table>
                </body>
            </html>";

        $admin_headers[] = "MIME-Version: 1.0";
        $admin_headers[] = "Content-type:text/html;charset=UTF-8";
        $admin_headers[] = "From: The Karnataka Tourism <book@thekarnatakatourism.com>";
        $admin_mail_sent = mail($admin_email, $admin_subject, $admin_message, implode("\r\n", $admin_headers));

        if (!$admin_mail_sent) {
            header("Location: error.php");
            exit;
        }

        // Send user email
        $user_headers[] = "MIME-Version: 1.0";
        $user_headers[] = "Content-type:text/html;charset=UTF-8";
        $user_headers[] = "From: The Karnataka Tourism <book@thekarnatakatourism.com>";

        $user_email = $_POST['email'];
        $user_subject = "Greetings from Karnataka Tourism!";
        $user_message = "
            Dear {$_POST['name']},<br><br>
            Thanks for Booking <strong>{$_POST['resort']}</strong> resort,<br><br>
            Your Arrival Date: <strong>{$_POST['arrival_date']}</strong><br>
            Your Departure Date: <strong>{$_POST['departure_date']}</strong><br><br>
            Please note that this is an Automated Email to acknowledge receipt of your query and not a booking confirmation;
            please expect to hear from us within 24 working hours with a status update.<br><br>
            Having said that, may we assure you that you are now only a few steps away from creating memories for a lifetime,
            while we check availability as per your request and revert to you.<br><br>
            In case you prefer to finalize your choice of itinerary immediately, we are eager to speak to you!<br><br>
            Please do call us now:<br>
            <strong>Ramnath Sadekar:</strong> 09449244567<br>
            <strong>Sanjay Bhat:</strong> 09902474761<br><br>
            Yours sincerely,<br>
            <strong>Ramnath Sadekar</strong><br>
            For <strong>www.TheKarnatakatourism.com</strong><br>
            E-mail: <strong>travelkarnataka@gmail.com</strong>";

        $user_mail_sent = mail($user_email, $user_subject, $user_message, implode("\r\n", $user_headers));
        if (!$user_mail_sent) {
            header("Location: error.php");
            exit;
        }

        header("Location: success.php");
        exit;
    } else {
        header("Location: error.php");
        exit;
    }
} else {
    header("Location: error.php");
    exit;
}
