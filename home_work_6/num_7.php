<?php
header('Content-Type: application/json');

if(isset($_REQUEST['country'])) {
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "api_7"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $country = $_REQUEST['country'];

    $sql = "SELECT city FROM cities WHERE country = '$country'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $cities = array();

        while($row = $result->fetch_assoc()) {
            $cities[] = $row["city"];
        }
        echo json_encode($cities);
    } else {
        echo json_encode(array());
    }
    $conn->close();
} else {
    echo json_encode(['error' => 'Параметр "country" відсутній']);
}

// Приклад ендпойнта до цього завдання ?country=Ukraine

// Список країн в базі даних Ukraine, Poland, Germany, France, United Kingdom
?>
