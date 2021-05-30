<?php 
// DATABASE CONNECTION

$host = 'localhost';
$username = 'root';
$password = 'root';
$db_name = 'db_hotel';

// Apertura connessione

$conn = new mysqli($host, $username, $password, $db_name);

//var_dump($conn);

// Controllo connessione

if ($conn && $conn->connect_error) {
    die("Connection failed: $conn -> connect_error");
}

