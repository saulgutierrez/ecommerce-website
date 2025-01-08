<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $password = '';
    $nombre_db = 'ecommerce';

    $conn = new mysqli($servidor, $usuario, $password, $nombre_db);

    if ($conn->connect_error) {
        die("Error en la conexion: ".$conn->connect_error);
    }
?>