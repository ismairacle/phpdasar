<?php 

// connect database 
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// semua mekanisme query/mengambil data ada didalam function
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    // menyiapkan wadah kosong untuk untuk mengmbil data
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) { //mysqli_fetch_assoc mengambil data dalam bentuk array asosiatif
        $rows [] = $row;
    }
    return $rows;
}

?>