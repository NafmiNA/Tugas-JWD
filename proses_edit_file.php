<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

include 'config/koneksi.php';

$id = $_POST['id'];
$judul = $_POST['judul'];

mysqli_query($conn, "UPDATE file_upload SET judul='$judul' WHERE id='$id'");

header("Location: list_file.php");
exit;
