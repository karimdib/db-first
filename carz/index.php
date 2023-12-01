<?php

$connessione = new mysqli('localhost', 'root', '', 'umani');



$nome = $connessione->real_escape_string($_GET['nome']);
$cognome = $connessione->real_escape_string($_GET['cognome']);
$ordini = $connessione->real_escape_string($_GET['ordini']);


$data = "INSERT INTO persone (nome,cognome,ordini) VALUES
('$nome','$cognome','$ordini')
";


if ($connessione->query($data) === true) {
    echo 'i dati sono stati inseriti correttamene';
} else {
    echo ' i dati non sono stati inseriti';
}
