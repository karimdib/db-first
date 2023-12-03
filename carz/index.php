<?php

$connessione = new mysqli('localhost', 'root', '', 'paesi');

$x = [
    'barcellona' => 3333333,
    'torino' => 300090,
    'milano' => 5503452,
];


foreach ($x as $key => $value) {
    var_dump($key);
    var_dump($value);
    $sql = "INSERT INTO citta (nome,persone) VALUES
    ('$key','$value')
    ";
    $connessione->query($sql);
}

$connessione->close();
