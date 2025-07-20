<?php 
include 'includes/header.php';

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - Company Profile</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Bootstrap optional -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="scroll-gallery" id="scrollGallery">
    <div class="scroll-inner" id="scrollInner">
        <!-- Gambar-gambar galeri -->
        <img src="assets/images/gambar 1.jpg" alt="Produk 1">
        <img src="assets/images/gambar2.jpg" alt="Produk 2">
        <img src="assets/images/gambar3.jpg" alt="Produk 3">
        <img src="assets/images/gambar4.jpg" alt="Produk 4">
        <img src="assets/images/gambar5.jpeg" alt="Produk 5">
    </div>
</div>

</body>


<script>
    const scrollGallery = document.getElementById("scrollGallery");
    const scrollInner = document.getElementById("scrollInner");

    // Duplikat isi untuk efek loop
    scrollInner.innerHTML += scrollInner.innerHTML;

    let scrollSpeed = 3;

    function loopScroll() {
        scrollGallery.scrollLeft += scrollSpeed;
        if (scrollGallery.scrollLeft >= scrollInner.scrollWidth / 2) {
            scrollGallery.scrollLeft = 0; // ulang dari awal
        }
        requestAnimationFrame(loopScroll);
    }

    loopScroll(); // jalankan
</script>