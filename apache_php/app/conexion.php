<?php

$servidorDB = "database-1.czxapucafvwz.us-east-1.rds.amazonaws.com";
$usuarioDB = "admin";
$passwordDB = "potolo123";
$nombreDB = "lista";

$conn = new mysqli($servidorDB, $usuarioDB, $passwordDB, $nombreDB);
if ($conn->connect_errno) {
   die("error de conexión: " . $mysqli->connect_error);
}

function insertaProducto($conn, $nombre) {
   $sql = "INSERT INTO productos (nombre) VALUES ('$nombre')";
   $conn->query($sql);
}

function buscaProductos($conn){
    $sql = "SELECT * FROM productos";
    $result = $conn->query($sql);
    return $result;
}

?>