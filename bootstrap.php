<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biodata Diri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
  </head>
  <style>
    .carousel-inner img {
    height: 500px; /* Atur tinggi */
    object-fit: cover; /* Memotong gambar agar tetap rapi */
   }
   h1{
    color:rgb(255, 81, 168) !important; 
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

  /* Mengatur ukuran kolom agar lebih kecil */
  .row {
    max-width: 1000px; /* Batas maksimal lebar container */
    margin: 0 auto; /* Tengah-kan konten */
  }

  .col-md-6 {
    max-width: 480px; /* Membatasi lebar kolom */
    margin: 0 auto; /* Tengah-kan kolom */
  }

  /* Mengurangi padding di dalam card */
  .h-100 {
    padding: 3rem; /* Mengurangi padding dalam card */
  }

  /* Mengurangi ukuran font dan tombol */
  .h-100 h2 {
    font-size: 1.5rem; /* Ukuran font lebih kecil */
  }

  .h-100 p {
    font-size: 1rem; /* Ukuran font lebih kecil */
  }

  .btn {
    padding: 0.6rem 1.2rem; /* Ukuran tombol lebih kecil */
    font-size: 14px; /* Ukuran font tombol lebih kecil */
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
  <body>

  <?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Flower Garden</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link active" href="bootstrap.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="datapengguna.php">Data</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Lainnya</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="profile.php">Profile Pengembang</a></li>
                        <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
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
<h1><center>Produk Teratas</span></center></h1>
<br>

<div class="container">
  <div class="row">
    <!-- Card Bunga 1 -->
    <div class="col-md-4">
      <div class="card" style="width: 100%;">
        <img src="bg1.jpg" class="card-img-top" alt="Bunga Mawar">
        <div class="card-body">
          <h5 class="card-title">Bunga Mawar</h5>
          <p class="card-text">Harga: Rp 50.000</p>
          <p class="card-text">Stok: 20</p>
          <a href="beli.php?produk=mawar" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
    <!-- Card Bunga 2 -->
    <div class="col-md-4">
      <div class="card" style="width: 100%;">
        <img src="bg2.jpg" class="card-img-top" alt="Bunga Tulip">
        <div class="card-body">
          <h5 class="card-title">Bunga Tulip</h5>
          <p class="card-text">Harga: Rp 70.000</p>
          <p class="card-text">Stok: 30</p>
          <a href="beli.php?produk=tulip" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
    <!-- Card Bunga 3 -->
    <div class="col-md-4">
      <div class="card" style="width: 100%;">
        <img src="bg8.jpeg" class="card-img-top" alt="Bunga Anggrek">
        <div class="card-body">
          <h5 class="card-title">Bunga Anggrek</h5>
          <p class="card-text">Harga: Rp 85.000</p>
          <p class="card-text">Stok: 15</p>
          <a href="beli.php?produk=anggrek" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
  </div>
</div>

<br>

<div class="container">
  <div class="row">
    <!-- Card Bunga 4 -->
    <div class="col-md-4">
      <div class="card" style="width: 100%;">
        <img src="bg9.jpeg" class="card-img-top" alt="Bunga Lili">
        <div class="card-body">
          <h5 class="card-title">Bunga Lili</h5>
          <p class="card-text">Harga: Rp 60.000</p>
          <p class="card-text">Stok: 13</p>
          <a href="beli.php?produk=lili" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
    <!-- Card Bunga 5 -->
    <div class="col-md-4">
      <div class="card" style="width: 100%;">
        <img src="bg7.jpeg" class="card-img-top" alt="Bunga Daisy">
        <div class="card-body">
          <h5 class="card-title">Bunga Daisy</h5>
          <p class="card-text">Harga: Rp 45.000</p>
          <p class="card-text">Stok: 25</p>
          <a href="beli.php?produk=daisy" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
    <!-- Card Bunga 6 -->
    <div class="col-md-4">
      <div class="card" style="width: 100%;">
        <img src="bg10.jpeg" class="card-img-top" alt="Bunga Dahlia">
        <div class="card-body">
          <h5 class="card-title">Bunga Dahlia</h5>
          <p class="card-text">Harga: Rp 65.000</p>
          <p class="card-text">Stok: 22</p>
          <a href="beli.php?produk=dahlia" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
        id="bd-theme"
        type="button"
        aria-expanded="false"
        data-bs-toggle="dropdown"
        
        aria-label="Toggle theme (auto)">
  <svg class="bi my-1 theme-icon-active" aria-hidden="true"><use href="#circle-half"></use></svg>
  <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
</button>
<ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
  <li>
    <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" 
    aria-pressed="false">
      <svg class="bi me-2 opacity-50" aria-hidden="true"><use href="#sun-fill"></use></svg>
      Light
      <svg class="bi ms-auto d-none" aria-hidden="true"><use href="#check2"></use></svg>
    </button>
  </li>
  <li>
    <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
     aria-pressed="false">
      <svg class="bi me-2 opacity-50" aria-hidden="true"><use href="#moon-stars-fill"></use></svg>
      Dark
      <svg class="bi ms-auto d-none" aria-hidden="true"><use href="#check2"></use></svg>
    </button>
  </li>
  <li>
    <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" 
    aria-pressed="true">
      <svg class="bi me-2 opacity-50" aria-hidden="true"><use href="#circle-half"></use></svg>
      Auto
      <svg class="bi ms-auto d-none" aria-hidden="true"><use href="#check2"></use></svg>
    </button>
  </li>
</ul>
    </div>

    <br>
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
<br>

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
          <li><i class="bi bi-envelope"></i> info@flowergarden.com</li>
          <li><i class="bi bi-telephone"></i> +62 812-3456-7890</li>
          <li><i class="bi bi-geo-alt"></i> Jl. Kebahagiaan No. 99, Palembang</li>
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
