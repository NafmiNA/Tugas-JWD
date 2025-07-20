<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

include 'config/koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar File</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Daftar File Terupload</h2>
    <table border="1" cellpadding="10" cellspacing="0" style="margin:auto;">
        <tr style="background:#eee;">
            <th>No</th>
            <th>Judul</th>
            <th>File</th>
            <th>Aksi</th>
        </tr>

        <td>
    <a href='uploads/{$data['nama_file']}' target='_blank'>Lihat</a> | 
    <a href='edit_file.php?id={$data['id']}'>Edit</a> | 
    <a href='hapus_file.php?id={$data['id']}' onclick='return confirm(\"Hapus file ini?\")'>Hapus</a>
</td>

        <?php
        $no = 1;
        $query = mysqli_query($conn, "SELECT * FROM file_upload ORDER BY id DESC");
        while ($data = mysqli_fetch_assoc($query)) {
            echo "<tr>
                <td>{$no}</td>
                <td>{$data['judul']}</td>
                <td><a href='uploads/{$data['nama_file']}' target='_blank'>Lihat</a></td>
                <td><a href='hapus_file.php?id={$data['id']}' onclick='return confirm(\"Hapus file ini?\")'>Hapus</a></td>
            </tr>";
            $no++;
        }
        ?>
    </table>
    <div style="text-align:center; margin-top:20px;">
        <a href="upload.php">Kembali ke Upload</a> |
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
