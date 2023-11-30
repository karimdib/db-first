<?php


//$connessione = mysqli_connect('localhost', 'root', '', 'primo');

$connessione = new mysqli('localhost', 'root', '', 'primo');

if ($connessione === false) {
    echo 'errore con la connessione';
} else {
    echo 'connsessione avvenuta con successco';
}

/*
$database = ("CREATE DATABASE db_prova");

if ($connessione->query($database) === true) {
    echo 'database creato con successo';
} else {
    echo 'errore con il database';
}
*/



$table = "CREATE TABLE persone(
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(40) NOT NULL,
    cognome VARCHAR(40) NOT NULL,
    email VARCHAR(90) NOT NULL UNIQUE
)";

if ($connessione->query($table) === true) {
    echo 'la tabella è stata creata con successo  ';
} else {
    echo 'cè stato un errore con la creazione della tabella';
}
