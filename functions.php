<?php
$conn = mysqli_connect("localhost", "root", "", "megadata");

function query($query){
    global $conn;

    $result = mysqli_query($conn, $query);

    $rows = [];

    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return ($rows);
}

function add($data) {
    global $conn;
    $nama = $_POST["nama"];
    $merek = $_POST["merek"];
    $serial_number = $_POST["serial_number"];
    $jumlah = $_POST["jumlah"];

    $query = "INSERT INTO inventaris VALUES (
        '', '$nama', '$merek', '$serial_number', '$jumlah'
    )";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}




?>


