<?php
// API PrivatBank

$url = 'https://api.privatbank.ua/p24api/pubinfo?exchange&coursid=5';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36');


$response = curl_exec($ch);

if ($response === false) {
    echo 'Помилка cURL: ' . curl_error($ch);
} else {
    
    echo $response;
}

curl_close($ch);
?>
