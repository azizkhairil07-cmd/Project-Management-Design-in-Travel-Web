<?php
$host     = 'mysql';
$username = 'root';
$password = 'password';
$dbname   = 'travel_projectdigabung';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}
?>
