<?php
$host = "localhost";
$user = "root";
$pass = ""; // sesuaikan jika ada password
$dbname = "kantindb";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
?>
