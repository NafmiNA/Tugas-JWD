<?php 
include 'includes/header.php';  
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Company Profile</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Bootstrap optional -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="content">
    <div class="about-container">
        <h2>Hubungi Kami</h2>

        <div class="about-section">
            <h3>Alamat Kantor</h3>
            <p>Jalan Merdeka No. 123, Jakarta Pusat, Indonesia</p>
        </div>

        <div class="about-section">
            <h3>Email</h3>
            <p>info@perusahaan.com</p>
        </div>

        <div class="about-section">
            <h3>Telepon</h3>
            <p>(021) 123-4567</p>
        </div>

        <div class="about-section">
            <h3>Formulir Kontak</h3>
            <form action="#" method="post">
                <label>Nama:</label><br>
                <input type="text" name="nama" required><br><br>

                <label>Email:</label><br>
                <input type="email" name="email" required><br><br>

                <label>Pesan:</label><br>
                <textarea name="pesan" rows="5" required></textarea><br><br>

                <button type="submit">Kirim</button>
            </form>
        </div>
    </div>
</div>

    
</html>
<?php 
include 'includes/footer.php'; 
?>
