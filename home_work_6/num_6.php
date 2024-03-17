<?php

header('Content-Type: application/json');

if(isset($_REQUEST['date1']) && isset($_REQUEST['date2'])) {
    $date1 = $_REQUEST['date1'];
    $date2 = $_REQUEST['date2'];

    if (strtotime($date1) !== false && strtotime($date2) !== false) {
        $diff = abs(strtotime($date2) - strtotime($date1)) / (60 * 60 * 24);

    
        echo json_encode([
            'date1' => $date1,
            'date2' => $date2,
            'diff' => $diff
        ]);
    } else {
        echo json_encode(['error' => 'Incorrect date format']);
    }
} else {
    echo json_encode(['error' => 'Date parameters are missing']);
}

// зразок ендпоінту ?date1=2020-05-06&date2=2020-05-07 
?>
