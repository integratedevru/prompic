<?php

function isCaptchaSuccess($recaptcha_response)
{
    $recaptcha_secret_key = $_ENV['RECAPTCHA_SECRET_KEY'];
    $url = "https://www.google.com/recaptcha/api/siteverify";
    $data = array(
        'secret' => $recaptcha_secret_key,
        'response' => $recaptcha_response,
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
    return $result_json['success'];
}
