

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Biodata Diri</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <style>
                body {
                background: url('flowers.jpeg') no-repeat center center fixed;
                    background-size: cover;
                    margin: 0;
                    padding: 0;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                }
                .container {
                    background: rgba(255, 255, 255, 0.7); 
                    padding: 20px;
                    border-radius: 10px;
                    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
                    width: 40%; /* Lebih kecil agar lebih pas */
                }
                h2 {
                color: purple; 
                }
                .text-purple {
                    color: purple !important; 
                    font-weight: bold;
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
                .form-label {
                font-weight: bold;
                color: purple;
                width: 120px; 
                text-align: left;
                white-space: nowrap;
                }
                .btn-primary {
                    background-color:rgb(76, 175, 80);
                    border-color:rgb(76, 175, 80);
                    color: white;
                }
                .btn-primary:hover {
                    background-color: rgb(56, 146, 59);
                    border-color: rgb(56, 146, 59);
                    color: white;
                }
                .btn-danger{
                    background: #f44336;
                    color: white;
                }
                .btn-danger:hover{
                    background-color: rgb(211, 37, 24);
                    border-color: rgb(211, 37, 24);
                    color: white;
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

        // Ambil data dulu
        if (isset($_GET['id_pembelian'])) {
            $id_pembelian = $_GET['id_pembelian'];
            $result = mysqli_query($conn, "SELECT * FROM pembelian WHERE id_pembelian='$id_pembelian'");
            $data = mysqli_fetch_assoc($result);
        } else {
            echo "ID tidak ditemukan.";
            exit;
        }

        // Update data jika form disubmit
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $no_barang = $_POST['no_barang'];
            $tanggal_pesanan = $_POST['tanggal_pesanan'];
            $status_pesanan = $_POST['status_pesanan'];
            $jumlah = $_POST['jumlah'];
            $total_harga = $_POST['total_harga'];

            $query = mysqli_query($conn, "UPDATE pembelian SET 
                no_barang='$no_barang',
                tanggal_pesanan='$tanggal_pesanan',
                status_pesanan='$status_pesanan',
                jumlah='$jumlah',
                total_harga='$total_harga'
                WHERE id_pembelian='$id_pembelian'");

            if ($query) {
                echo "<script>alert('Data berhasil diupdate!'); window.location.href='index.php';</script>";
                exit;
            } else {
                echo "Gagal mengupdate data: " . mysqli_error($conn);
            }
        }
        ?>


        <div class="container mt-5">
            <h2><center>Edit Data Pembelian</center></h2>
            <form method="post">
                <div class="mb-3">
                    <label>No Barang</label>
                    <input type="text" name="no_barang" class="form-control" value="<?php echo $data['no_barang']; ?>" required>
                </div>
                <div class="mb-3">
                    <label>Tanggal Pesanan</label>
                    <input type="date" name="tanggal_pesanan" class="form-control" value="<?php echo $data['tanggal_pesanan']; ?>" required>
                </div>
                <div class="mb-3">
                    <label>Status Pesanan</label>
                    <select name="status_pesanan" class="form-control" required>
                        <option value="">-- Pilih Status --</option>
                        <option value="Pending" <?php if ($data['status_pesanan'] == 'Pending') echo 'selected'; ?>>Pending</option>
                        <option value="Diproses" <?php if ($data['status_pesanan'] == 'Diproses') echo 'selected'; ?>>Diproses</option>
                        <option value="Dikirim" <?php if ($data['status_pesanan'] == 'Dikirim') echo 'selected'; ?>>Dikirim</option>
                        <option value="Selesai" <?php if ($data['status_pesanan'] == 'Selesai') echo 'selected'; ?>>Selesai</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Jumlah</label>
                    <input type="number" name="jumlah" class="form-control" value="<?php echo $data['jumlah']; ?>" required>
                </div>
                <div class="mb-3">
                    <label>Total Harga</label>
                    <input type="number" name="total_harga" class="form-control" value="<?php echo $data['total_harga']; ?>" required>
                </div>
                <center><button type="submit" name="update" class="btn btn-primary">Update</button>
                <a href="index.php" class="btn btn-secondary">Batal</a></center>
            </form>
        </div>
        </body>
        </html>
