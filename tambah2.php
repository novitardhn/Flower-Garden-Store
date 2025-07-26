<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Bunga</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
         html, body {
            margin: 0;
            text-align: center;
            background: url('flowers.jpeg') no-repeat center center fixed;
            background-size: cover;
        }
        h2 {
            margin-bottom: 15px;
            color: purple;
        }
        .container {
            width: 450px;
            background: rgba(255, 255, 255, 0.75);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            margin-top: 150px;
        }
        .form-group {
            display: flex;
            align-items: center; 
            width: 100%;
            margin-bottom: 15px;
        }
        .form-group label {
            font-weight: bold;
            color: purple;
            width: 120px; 
            text-align: left;
            white-space: nowrap; 
        }
        .form-group input {
            flex: 1; 
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        
        .navbar {
            background-color: rgb(254, 80, 167) !important;
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

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .btn-success {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border-radius: 5px;
            border: none;
            width: 30%;
        }
        .btn-success:hover{
            background-color: rgb(56, 146, 59);
            color: white;
        }
        .btn-danger {
            background-color: #f44336;
            color: white;
            padding: 10px;
            border-radius: 5px;
            border: none;
            width: 30%;
        }
        .btn-danger:hover{
            background-color: rgb(211, 37, 24);
            color: white;
        }
    </style>
</head>
<body>
  <!-- Navbar -->
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
                        <li><<a class="dropdown-item" href="index.php">Data Admin</a></li>
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

    <?php
        include 'koneksi.php';

        $message = ""; // Variabel untuk menyimpan pesan

        if(isset($_POST['submit'])) {
            $no = $_POST['no'];
            $nama_bunga = $_POST['nama_bunga'];
            $warna = $_POST['warna'];

            $query = "INSERT INTO Bunga (No, Nama_Bunga, Warna) VALUES ('$no', '$nama_bunga', '$warna')";

            if (mysqli_query($conn, $query)) {
                $message = "<p class='alert alert-success'>Data bunga berhasil ditambahkan!</p>";
            } else {
                $message = "<p class='alert alert-danger'>Error: " . mysqli_error($conn) . "</p>";
            }    
        }
    ?>

    <div class="container">
        <h2>Tambah Data Bunga</h2>

       
        <?php echo $message; ?>

        <form method="POST">
            <div class="form-group">
                <label>No:</label>
                <input type="number" name="no" required>
            </div>
            <div class="form-group">
                <label>Nama Bunga:</label>
                <input type="text" name="nama_bunga" required>
            </div>
            <div class="form-group">
                <label>Warna:</label>
                <input type="text" name="warna" required>
            </div>
            <div class="btn-container">
                <input type="submit" name="submit" value="Tambah Data" class="btn btn-success">
                <a href="index.php" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>
