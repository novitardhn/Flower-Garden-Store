<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profil Pengembang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #f9d5ec, #f3f7fa);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }
    .profile-card {
      background: white;
      border-radius: 15px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.1);
      padding: 30px;
      max-width: 400px;
      text-align: center;
    }
    .profile-card img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
      border: 4px solid #f080c0;
      margin-bottom: 20px;
    }
    .profile-card h3 {
      color: #4a148c;
      margin-bottom: 10px;
    }
    .profile-card p {
      margin: 5px 0;
      color: #555;
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
  </style>
</head>
<body>

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
<div class="container mt-5 pt-5">
  <h2 class="text-center mb-4" style="color: #4a148c; font-weight: bold;">Profile Pengembang</h2>

  <div class="d-flex justify-content-center">
    <div class="profile-card">
      <img src="profile.jpg" alt="Foto Profil">
      <h3>Novita Ramadhini</h3>
      <p><strong>NIM:</strong> 09031382328148</p>
      <p><strong>Jurusan:</strong> Sistem Informasi</p>
      <p><strong>Fakultas:</strong> Fakultas Ilmu Komputer</p>
      <p><strong>Email:</strong> novitaramadhini@gmail.com</p>
    </div>
  </div>
</div>

</body>
</html>