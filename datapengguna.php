<?php
// Koneksi ke database
include 'koneksi.php';

// Menampilkan data pembelian
$result_pembelian = mysqli_query($conn, "SELECT * FROM Pembelian");

// Menambahkan data pembelian
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_pembelian'])) {
    $no_barang = $_POST['no_barang'];
    $tanggal_pesanan = $_POST['tanggal_pesanan'];
    $status_pesanan = $_POST['status_pesanan'];
    $jumlah = $_POST['jumlah'];
    $total_harga = $_POST['total_harga'];

    $query = "INSERT INTO Pembelian (no_barang, tanggal_pesanan, status_pesanan, jumlah, total_harga) 
              VALUES ('$no_barang', '$tanggal_pesanan', '$status_pesanan', '$jumlah', '$total_harga')";
    if (mysqli_query($conn, $query)) {
        header("Location: #"); // Halaman yang sama untuk melihat data baru
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembelian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styling */
        html, body {
            background: url('bunga2.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
        }
        h2 {
            color: purple;
            margin-top: 30px;
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
        .container {
            width: 80%;
            margin: auto;
            background: rgba(255, 255, 255, 0.74);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            margin-top: 100px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background: white;
        }
        thead {
            background: rgb(209, 139, 255);
            color: white;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }
        .edit-btn {
            background: #ff9800;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
        }
        .cancel-btn {
            background: red;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
        }
        .add-btn {
            background: #4CAF50;
            color: white;
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }
        .add-btn:hover {
            background-color: rgb(56, 146, 59);
            border-color: rgb(56, 146, 59);
            color: white;
        }
        .add-btnkm {
            background: #f44336;
            color: white;
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }
        .add-btnkm:hover {
            background-color: rgb(211, 37, 24);
            border-color: rgb(211, 37, 24);
            color: white;
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



<div class="container">
    <h2>Data Pembelian</h2>
    <table>
        <thead>
            <tr>
                <th>ID Pembelian</th>
                <th>No. Barang</th>
                <th>Tanggal Pesanan</th>
                <th>Status Pesanan</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row_pembelian = mysqli_fetch_assoc($result_pembelian)) { ?>
            <tr>
                <td><?php echo $row_pembelian['id_pembelian']; ?></td>
                <td><?php echo $row_pembelian['no_barang']; ?></td>
                <td><?php echo $row_pembelian['tanggal_pesanan']; ?></td>
                <td><?php echo $row_pembelian['status_pesanan']; ?></td>
                <td><?php echo $row_pembelian['jumlah']; ?></td>
                <td><?php echo $row_pembelian['total_harga']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <a href="bootstrap.php" class="add-btnkm">Kembali</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
