<?php
session_start();
include 'config/koneksi.php';

$judul = $_POST['judul'];
$nama_file = $_FILES['file']['name'];
$lokasi_file = $_FILES['file']['tmp_name'];
$folder = "uploads/";

$upload = move_uploaded_file($lokasi_file, $folder.$nama_file);

if ($upload) {
    $sql = "INSERT INTO file_upload (judul, nama_file) VALUES ('$judul', '$nama_file')";
    mysqli_query($conn, $sql);
    echo "<link rel='stylesheet' href='css/style.css'>";
    echo "<div class='success-box'>File berhasil diupload!</div>";
    echo "<div style='text-align:center; margin-top:10px;'><a href='upload.php'>Kembali</a></div>";
} else {
    echo "<link rel='stylesheet' href='css/style.css'>";
    echo "<div class='error-box'>Gagal upload file.</div>";
    echo "<div style='text-align:center; margin-top:10px;'><a href='upload.php'>Coba Lagi</a></div>";
}
?>
