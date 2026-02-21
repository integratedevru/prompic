<?php

require __DIR__ . '/../bootstrap.php';
require __DIR__ . '/helpers.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

$name = $_POST['name'];
$mailform = $_POST['mailform'];
$phone = $_POST['phone'];

try {
    $mail->SMTPAutoTLS = false;
    $mail->isSMTP();
    $mail->Host = $_ENV['SMTP_HOST'];
    $mail->SMTPAuth = true;
    $mail->Username = $_ENV['SMTP_USERNAME'];
    $mail->Password = $_ENV['SMTP_PASSWORD'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = (int) $_ENV['SMTP_PORT'];
    $mail->CharSet = 'UTF-8';

    $mail->setFrom($_ENV['SMTP_FROM_EMAIL'], $_ENV['SMTP_FROM_NAME']);
    $mail->addAddress($_ENV['MAIL_TO']);

    $bccList = explode(',', $_ENV['MAIL_BCC']);
    foreach ($bccList as $bcc) {
        $bcc = trim($bcc);
        if ($bcc) {
            $mail->addBCC($bcc);
        }
    }

    $mail->Subject = $siteConfig['email_prefix'] . 'Запрос от ' . $name;
    $mail->Body = $siteConfig['email_prefix'] . 'Поступил запрос из формы "Заявка на расчёт проекта"' . "\n" .
        'от ' . $name . "\n" .
        'номер телефона: ' . $phone;

    if (isCaptchaSuccess($_POST['g-recaptcha-response'])) {
        $mail->send();
        header("Location: /?success=1");
    } else {
        header("Location: /?error=2");
    }
} catch (Exception $e) {
    header("Location: /?error=1");
}
