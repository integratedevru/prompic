<?php

function isCaptchaSuccess($token)
{
    $secret = $_ENV['CAPTCHA_SECRET_KEY'];
    $url = "https://smartcaptcha.cloud.yandex.ru/validate";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
        'secret' => $secret,
        'token' => $token,
    ]));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);

    $result = curl_exec($ch);
    curl_close($ch);

    $result_json = json_decode($result, true);
    return isset($result_json['status']) && $result_json['status'] === 'ok';
}
