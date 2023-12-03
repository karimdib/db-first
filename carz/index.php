<?php

$conessione = new mysqli('localhost', 'root', '', 'eroi');

$sql = "SELECT * FROM  supereroi";

if ($result = $conessione->query($sql)) {
    if ($result->num_rows > 0) {
        echo '
        <table>
        <thead>
        <tr>
        <th>id</th>
        <th>nome</th>
        <th>cognome</th>
        <th>superpotere</th>
        </tr>
        </thead>
        ';
        while ($row = $result->fetch_array()) {
            echo '
            <tbody>
            <tr>
            <td>' . $row['id'] . '</td>
            <td>' . $row['nome'] . '</td>
            <td>' . $row['cognome'] . '</td>
            <td>' . $row['superpotere'] . '</td>
            </tr>
            </tbody>
            ';
        }
    } else {
        echo ' non ci sono righe nella tabella';
    }
} else {
    echo ' non ci sono dati nella tabella, oppure la tabella non esiste proprio';
}
