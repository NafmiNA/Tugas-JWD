<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "company_profile";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
