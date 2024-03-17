<?php

header('Content-Type: application/json');

date_default_timezone_set('Europe/Kiev');
$currentDate = date('Y-m-d');
$currentTime = date('H:i:s');

$data = [
    'date' => $currentDate,
    'time' => $currentTime
];

echo json_encode($data);
?>
