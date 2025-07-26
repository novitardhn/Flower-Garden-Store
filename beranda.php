<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biodata Diri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .carousel-inner img {
        height: 500px;
        object-fit: cover;
      }
      h1 {
        color: rgb(255, 81, 168) !important;
      }
      .navbar {
        background-color: rgb(240, 81, 160) !important;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
      }
      .navbar .navbar-brand {
        font-size: 20px;
        font-weight: bold;
      }
      .navbar .nav-link {
        font-size: 16px;
        padding: 10px 15px;
      }
      .navbar .dropdown-menu {
        background: rgba(0, 0, 0, 0.9);
      }
      .navbar .dropdown-item {
        color: white;
      }
      .navbar .dropdown-item:hover {
        background: rgba(255, 255, 255, 0.2);
      }
      .btn-primary {
        background-color: #ff69b4 !important;
        color: white !important;
      }
      .btn-primary:hover {
        background-color: #ff1493 !important;
        border-color: #ff1493 !important;
      }
      .row {
        max-width: 1000px;
        margin: 0 auto;
      }
      .col-md-6 {
        max-width: 480px;
        margin: 0 auto;
      }
      .h-100 {
        padding: 3rem;
      }
      .h-100 h2 {
        font-size: 1.5rem;
      }
      .h-100 p {
        font-size: 1rem;
      }
      .btn {
        padding: 0.6rem 1.2rem;
        font-size: 14px;
      }
      .intro {
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    margin-top: 30px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.intro h2 {
    font-size: 26px;
    color: rgb(235, 53, 155);
    margin-bottom: 15px;
}

.intro p {
    font-size: 16px;
    color: #555;
    line-height: 1.6;
    margin-bottom: 10px;
}

    </style>
  </head>
  <body>

  <?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])): ?>
  <a href="beli.php?produk=<?= $product['slug']; ?>" class="btn btn-primary">Beli</a>
<?php else: ?>
  <button type="button" class="btn btn-primary" onclick="alert('Silakan login terlebih dahulu untuk membeli produk.')">Beli</button>
<?php endif; ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Flower Garden</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link active" href="beranda.php">Home</a></li>
        <li class="nav-item"><a class="nav-link active" href="login.php"><b>Login</b></a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="tokobunga1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="bunga2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="bunga3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<br>
<section class="intro">
    <h2>Selamat Datang di Aplikasi Pemesanan Bunga</h2>
    <p>
        Aplikasi ini memudahkan Anda dalam membeli berbagai jenis bunga secara online. 
        Anda dapat memilih bunga favorit, menentukan jumlah yang diinginkan, lalu melakukan pembayaran melalui transfer bank. 
        Kami akan mengirimkan bunga langsung ke alamat yang Anda tentukan.
    </p>
    <p>
        Kami menyediakan bunga segar seperti <strong>Mawar Merah</strong>, <strong>Tulip</strong>, <strong>Lily</strong>, dan <strong>Daisy</strong> 
        dengan harga terjangkau dan layanan cepat. Terima kasih telah mempercayai <em>Toko Bunga Mawar Indah</em>.
    </p>
</section>

<br>
<h1><center>Produk Teratas</center></h1>
<br>

<div class="container">
  <div class="row">
    <?php
    $products = [
      ['name' => 'Bunga Mawar', 'price' => 50000, 'stock' => 20, 'img' => 'bg1.jpg', 'slug' => 'mawar'],
      ['name' => 'Bunga Tulip', 'price' => 70000, 'stock' => 30, 'img' => 'bg2.jpg', 'slug' => 'tulip'],
      ['name' => 'Bunga Anggrek', 'price' => 85000, 'stock' => 15, 'img' => 'bg8.jpeg', 'slug' => 'anggrek'],
      ['name' => 'Bunga Lili', 'price' => 60000, 'stock' => 13, 'img' => 'bg9.jpeg', 'slug' => 'lili'],
      ['name' => 'Bunga Daisy', 'price' => 45000, 'stock' => 25, 'img' => 'bg7.jpeg', 'slug' => 'daisy'],
      ['name' => 'Bunga Dahlia', 'price' => 65000, 'stock' => 22, 'img' => 'bg10.jpeg', 'slug' => 'dahlia'],
    ];

    foreach ($products as $product): ?>
      <div class="col-md-4 mb-4">
        <div class="card" style="width: 100%;">
          <img src="<?= $product['img']; ?>" class="card-img-top" alt="<?= $product['name']; ?>">
          <div class="card-body">
            <h5 class="card-title"><?= $product['name']; ?></h5>
            <p class="card-text">Harga: Rp <?= number_format($product['price'], 0, ',', '.'); ?></p>
            <p class="card-text">Stok: <?= $product['stock']; ?></p>
            <?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])): ?>
              <a href="beli.php?produk=<?= $product['slug']; ?>" class="btn btn-primary">Beli</a>
            <?php else: ?>
              <button type="button" class="btn btn-primary" onclick="alert('Silakan login terlebih dahulu untuk membeli produk.')">Beli</button>
            <?php endif; ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<br>

<main>
  <div class="row align-items-md-stretch">
    <div class="col-md-6">
      <div class="h-100 p-5 text-bg-dark rounded-3">
        <h2>Temukan Keindahan Bunga Pilihan Anda!</h2>
        <p>Apakah Anda mencari bunga yang indah dan memikat untuk momen spesial? Kami menyediakan berbagai 
          jenis bunga berkualitas tinggi. Segera temukan koleksi bunga terbaik kami dan bawa pulang keindahan 
          yang tak terlupakan!</p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="h-100 p-5 bg-body-tertiary border rounded-3">
        <h2>Ayo Beli Sekarang</h2>
        <p>Apakah Anda ingin mempercantik ruang Anda atau memberikan hadiah spesial? 
          Kami menawarkan berbagai bunga segar. Dengan harga terjangkau, keindahan ini 
          bisa Anda bawa pulang sekarang juga!</p>
      </div>
    </div>
  </div>
</main>

<footer class="bg-light text-center text-lg-start mt-5">
  <div class="container p-4">
    <div class="row">
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase" style="color:rgb(255, 81, 168); font-weight:bold;">Flower Garden</h5>
        <p>
          Menyediakan bunga segar berkualitas untuk semua momen spesial Anda. Terima kasih telah mempercayai kami sebagai pilihan terbaik Anda dalam berbagi keindahan.
        </p>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase" style="color:rgb(255, 81, 168);">Kontak</h5>
        <ul class="list-unstyled">
          <li>info@flowergarden.com</li>
          <li>+62 812-3456-7890</li>
          <li>Jl. Kebahagiaan No. 99, Palembang</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="text-center p-3" style="background-color: rgb(240, 81, 160); color: white;">
    © 2025 Flower Garden | Designed with ♥
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
</body>
</html>
