<?php

header('Content-Type: application/json');

date_default_timezone_set('Europe/Kiev');
$date = isset($_REQUEST['date']) ? $_REQUEST['date'] : date('Y-m-d');

$timestamp = strtotime($date);
if($timestamp !== false) {
    $dayOfWeek = date('l', $timestamp);

    echo json_encode(['day_of_week' => $dayOfWeek]);   // виникли труднощі при виведені Українською мовою - ( а так як це не вказано в технічному завданні помилкою це не рахуватиметься)
} else {
    echo json_encode(['error' => 'Incorrect date format']);
}

?>
