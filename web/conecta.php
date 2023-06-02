<?php

$servidor = "mysql.colexio-karbo.com"
$usuario = "karbo_piglesias"
$contraseña = "Alumno*2021"
$bbdd = "karbo_piglesias"

$conn = new mysqli($servidor, $usuario, $contraseña, $bbdd)

if($conn->connect_error){
    die("Error de conexión: " . $conn->connect_error);
}
?>