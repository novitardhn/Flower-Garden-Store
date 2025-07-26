<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Pembelian Bunga</title>
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
        }

        h4   {
            color: purple;
        }

        .container {
            width: 80%;
            margin: auto;
            background: rgba(255, 255, 255, 0.74);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.2);
            text-align: center;
            margin-top: 80px;
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
            background:rgb(17, 255, 0);
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
    <h2>Data Pembelian Bunga</h2>
    <?php
    include 'koneksi.php'; // Koneksi ke database
    $result = mysqli_query($conn, "SELECT * FROM pembelian"); // Mengambil data dari tabel pembelian

    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;}
    ?>

<table>
    <thead>
        <tr>
            <th>ID Pembelian</th>
            <th>No. Barang</th>
            <th>Tanggal Pesanan</th>
            <th>Status Pesanan</th>
            <th>Jumlah</th>
            <th>Total Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id_pembelian']; ?></td>
                <td><?php echo $row['no_barang']; ?></td>
                <td><?php echo $row['tanggal_pesanan']; ?></td>
                <td><?php echo $row['status_pesanan']; ?></td>
                <td><?php echo $row['jumlah']; ?></td>
                <td>Rp <?php echo number_format($row['total_harga'], 0, ',', '.'); ?></td>
                <td>
                    <a href="edit.php?id_pembelian=<?php echo $row['id_pembelian']; ?>" class="btn btn-warning mb-2">Edit</a>
                    <a href="delete.php?id_pembelian=<?php echo $row['id_pembelian']; ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<br>

<!-- Form Tambah Produk Baru -->
<h4 class="mt-4">Tambah Produk Baru</h4>
<form method="POST" action="">
    <div class="row">
        <div class="col-md-4 mb-3">
            <input type="text" name="nama" class="form-control" placeholder="Nama Produk" required>
        </div>
        <div class="col-md-4 mb-3">
            <input type="number" name="stok" class="form-control" placeholder="Stok" required>
        </div>
        <div class="col-md-4 mb-3">
            <input type="number" name="harga" class="form-control" placeholder="Harga (Rp)" required>
        </div>
    </div>
    <button type="submit" name="tambah_produk" class="btn btn-primary">Tambah Produk</button>
</form>
<hr>


</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
