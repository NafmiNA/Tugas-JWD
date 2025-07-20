<?php
session_start();
include 'config/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Query cek username dan password
$query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$password'");

if (mysqli_num_rows($query) == 1) {
    $_SESSION['login'] = true;
    $_SESSION['username'] = $username;
    header("Location: upload.php");
} else {
    // Jika gagal login
    echo "<link rel='stylesheet' href='css/style.css'>";
    echo "<div class='error-box'>Username atau password salah!</div>";
    echo "<div style='text-align:center; margin-top:10px;'><a href='login.php'>Kembali</a></div>";
}
?>
