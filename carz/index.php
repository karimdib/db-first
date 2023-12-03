<?php

$connessione = new mysqli('localhost', 'root', '', 'umani');

$sql = "SELECT * FROM donne INNER JOIN uomini ON donne.cognome =  uomini.cognome";

var_dump($sql);



$connessione->close();
