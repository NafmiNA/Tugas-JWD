<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
include 'config/koneksi.php';

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM file_upload WHERE id='$id'"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Judul File</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Edit Judul File</h2>
    <form action="proses_edit_file.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">

        <label>Judul Baru:</label><br>
        <input type="text" name="judul" value="<?= $data['judul'] ?>" required><br><br>

        <input type="submit" value="Simpan">
    </form>
    <div style="text-align:center; margin-top:20px;">
        <a href="list_file.php">Batal</a>
    </div>
</body>
</html>
<?php
// Close the database connection