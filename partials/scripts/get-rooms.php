<?php 
require_once __DIR__ . '/database.php';

// Ottenere stanze

$sql = "SELECT `id`, `room_number` FROM `stanze`";
$result = $conn->query($sql);

if($result && $result->num_rows > 0) {
    
    $rooms = [];

    while($row = $result->fetch_assoc()) {
        //Popolare l'array
        $rooms[] = $row;
    }
}else {
    echo "Query Error";
}

$conn->close();