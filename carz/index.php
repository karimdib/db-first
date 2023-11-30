<?php


//$connessione = mysqli_connect('localhost', 'root', '', 'primo');

$connessione = new mysqli('localhost', 'root', '');

if ($connessione === false) {
    echo 'errore con la connessione';
} else {
    echo 'connsessione avvenuta con successco';
}

$database = ("CREATE DATABASE db_prova");

if ($connessione->query($database) === true) {
    echo 'database creato con successo';
} else {
    echo 'errore con il database';
}
