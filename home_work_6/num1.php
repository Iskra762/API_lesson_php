<?php

// завдання №1
$data = [
    'x' => 1,
    'y' => 2,
    'z' => 3,
];

$resultat1 = json_encode($data);
echo $resultat1;

// Завдання №2
$json = '{
    "user": {
        "name": "john",
        "surn": "smit"
    },
    "city": "London"
}';

$resultat2 = json_decode($json, true);
echo "Ім'я: " . $resultat2['user']['name'] . "<br>";
echo "Прізвище: " . $resultat2['user']['surn'] . "<br>";
echo "Місто: " . $resultat2['city'] . "<br>";
?>