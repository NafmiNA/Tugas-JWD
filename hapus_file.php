<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

include 'config/koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM file_upload WHERE id = '$id'");
$data = mysqli_fetch_assoc($query);

unlink("uploads/" . $data['nama_file']);
mysqli_query($conn, "DELETE FROM file_upload WHERE id = '$id'");

header("Location: list_file.php");
exit;
