<?php
// mulai session buat login kalau perlu
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Beranda - Company Profile</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Bootstrap optional -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Header -->
<?php include 'includes/header.php'; ?>


<div class="container" style="margin-top:30px;">
    <div class="row">
        <!-- Sidebar kiri -->
        <div class="col-md-3">
            <?php include 'includes/sidebar.php'; ?>
        </div>

        <!-- Konten utama -->
        <div class="col-md-9">
            <h1>Selamat Datang di Website Kami</h1>
            <p>Ini adalah halaman depan dari website company profile yang berisi informasi seputar perusahaan kami.</p>
            <p style="text-align: justify;">Website ini memuat data lengkap mulai dari sejarah perusahaan, visi misi, produk yang ditawarkan, hingga daftar klien kami. Anda juga bisa melihat artikel dan event yang kami lakukan dari menu samping.</p>
            <p>Jangan lupa kunjungi halaman kontak untuk menghubungi kami yaa!</p>

            <div style="background: #eee;padding:15px;border-radius:10px;margin-top:20px;">
                <strong>Design by : </strong> Muhammad Naufal Nijami
            </div>
        </div>
    </div>
</div>


<!-- Footer -->
<?php include 'includes/footer.php'; ?>



</body>
</html>
