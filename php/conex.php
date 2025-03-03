<?php
$servername = "localhost"; // Nombre del servidor MySQL
$username = "root";        // Nombre del nombre de usuario de MySQL
$password = "";            // Contraseña del MySQL
$dbname = "bdcajp";        // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}