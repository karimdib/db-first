<?php


//$connessione = mysqli_connect('localhost', 'root', '', 'primo');

$connessione = new mysqli('localhost', 'root', '', 'primo');

if ($connessione === false) {
    echo 'errore con la connessione';
} else {
    echo 'connsessione avvenuta con successco';
}
