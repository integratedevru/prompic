<?php

function isCaptchaSuccess($token)
{
    $secret = $_ENV['CAPTCHA_SECRET_KEY'];
    $url = "https://smartcaptcha.cloud.yandex.ru/validate";
    $data = array(
        'secret' => $secret,
        'token' => $token,
    );
    $options = array(
        'http' => array(
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data),
        ),
    );
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $result_json = json_decode($result, true);
    return $result_json['status'] === 'ok';
}
