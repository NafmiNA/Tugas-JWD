<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title>
    <link rel="stylesheet" href="css/upload.css">
</head>
<body>
    <h2>Upload File Informasi</h2>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <label>Judul:</label><br>
        <input type="text" name="judul"><br><br>

        <label>Target Halaman (link):</label><br>
        <input type="text" name="link_target" placeholder="contoh: produk"><br><br>

        <label>Pilih File:</label><br>
        <input type="file" name="file"><br><br>

        <input type="submit" value="Upload">
    </form>
</body>
</html>
