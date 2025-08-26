<?php
require '../vendor/PHP-Mailer/src/PHPMailer.php';
require '../vendor/PHP-Mailer/src/SMTP.php';
require '../vendor/PHP-Mailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json; charset=utf-8");

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(200);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name    = $_POST['full_name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $phone   = $_POST['phone'] ?? '';
    $message = $_POST['message'] ?? '';
    $pageUrl = $_POST['page_url'] ?? '';

    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        http_response_code(400);
        echo json_encode(['status' => false, 'message' => 'Please fill in all required fields.']);
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'carpenterddswebsiteform@gmail.com';
        $mail->Password = 'vktt uspj uucw niow';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('carpenterddswebsiteform@gmail.com', 'Leslie Carpenter Appointment');
        // $mail->addAddress('access@sustain-media.com');
        $mail->addAddress('muhammadumair25591@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'NEW APPOINTMENT REQUEST - Family Dentistry';
        $mail->Body    = "<h3>Appointment Request Details</h3>
                          <p><strong>Name:</strong> $name</p>
                          <p><strong>Email:</strong> $email</p>
                          <p><strong>Phone:</strong> $phone</p>
                          <p><strong>Message:</strong> $message</p>
                          <p><strong>Submitted From Page:</strong> <a href='$pageUrl' target='_blank'>$pageUrl</a></p>";

        $mail->send();
        echo json_encode(['status' => true, 'message' => 'Form submitted successfully.']);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode([
            'status' => false,
            'message' => 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo
        ]);
    }
}

<?php
echo '<meta name="robots" content="noindex">';

require '../vendor/PHP-Mailer/src/PHPMailer.php';
require '../vendor/PHP-Mailer/src/SMTP.php';
require '../vendor/PHP-Mailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header("Access-Control-Allow-Origin: https://neworleansseocompany.com");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(200);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name    = $_POST['full_name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $phone   = $_POST['phone'] ?? '';
    $message = $_POST['message'] ?? '';
    $pageUrl = $_SERVER['HTTP_REFERER'] ?? '';

    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        http_response_code(400);
        echo json_encode(['status' => false, 'message' => 'Please fill in all required fields.']);
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'carpenterddswebsiteform@gmail.com';
        $mail->Password = 'vktt uspj uucw niow';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('carpenterddswebsiteform@gmail.com', 'Leslie Carpenter Appointment');
        // $mail->addAddress('access@sustain-media.com');
        $mail->addAddress('muhammadumair25591@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'NEW APPOINTMENT REQUEST - Family Dentistry';
        $mail->Body    = "<h3>Appointment Request Details</h3>
                          <p><strong>Name:</strong> $name</p>
                          <p><strong>Email:</strong> $email</p>
                          <p><strong>Phone:</strong> $phone</p>
                          <p><strong>Message:</strong> $message</p>
                          <p><strong>Submitted From Page:</strong> <a href='$pageUrl' target='_blank'>$pageUrl</a></p>";

        $mail->send();
        echo json_encode(['status' => true, 'message' => 'Form submitted successfully.']);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode([
            'status' => false,
            'message' => 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo
        ]);
    }
}
