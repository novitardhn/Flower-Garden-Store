<?php
// Menghubungkan ke database
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$dbname = "db_auth"; 

// Membuat koneksi ke MySQL
$conn = new mysqli($host, $user, $pass, $dbname);

// Mengecek apakah koneksi berhasil
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}   

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $flowerType = $_POST["flower-type"];
    $quantity = $_POST["quantity"];
    $totalPrice = $_POST["total-price"];
    $accountNumber = $_POST["account-number"];
    
    // Query untuk menyimpan data pembelian
    $query = "INSERT INTO pembelian (no_barang, tanggal_pesanan, status_pesanan, jumlah, total_harga) 
              VALUES ('$flowerType', NOW(), 'Pending', '$quantity', '$totalPrice')";
    
    if ($conn->query($query) === TRUE) {
        echo "<script>alert('Pesanan berhasil disimpan!');</script>";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli Bunga</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #fcd1e4, #f8cdda);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            font-weight: bold;
            font-size: 14px;
        }

        input[type="number"],
        input[type="text"],
        select {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        .total-price {
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
        }

        .payment-info h3 {
            margin-bottom: 10px;
            font-size: 18px;
        }

        .payment-info p {
            margin: 4px 0;
        }

        .button-group {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .button-group button,
        .button-group a {
            flex: 1;
            padding: 15px;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
        }

        .button-group button {
            background-color: rgb(250, 77, 184);
        }

        .button-group button:hover {
            background-color: rgb(194, 5, 122);
        }

        .button-group a {
            background-color: rgb(255, 98, 174);
        }

        .button-group a:hover {
            background-color: rgb(215, 49, 138);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Transaksi Pembelian Bunga</h1>

        <form method="POST" action="">
            <div class="flower-details">
                <label for="flower-type">Pilih Nama Bunga:</label>
                <select id="flower-type" name="flower-type">
                    <option value="Mawar Merah" data-price="50000">Mawar Merah - Rp 50.000</option>
                    <option value="Tulip" data-price="75000">Tulip - Rp 75.000</option>
                    <option value="Lily" data-price="60000">Lily - Rp 60.000</option>
                    <option value="Daisy" data-price="40000">Daisy - Rp 40.000</option>
                </select>

                <label for="quantity">Jumlah Bunga:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">

                <p class="total-price">Total Harga: Rp <span id="total-price">50.000</span></p>
            </div>

            <div class="payment-info">
                <h3>Informasi Pembayaran</h3>
                <p><strong>Transfer ke Rekening Penjual</strong></p>
                <p>Bank: Mandiri</p>
                <p>Nomor Rekening: <strong>1234567890</strong></p>
                <p>Atas Nama: <strong>Toko Flower Garden</strong></p>
                <p>No. Telepon Penjual: <strong>0812-3456-7890</strong></p>

                <label for="account-number">Masukkan Alamat Anda:</label>
                <input type="text" id="account-number" name="account-number" placeholder="Masukkan Alamat Anda" required>
            </div>

            <input type="hidden" id="hidden-total-price" name="total-price">

            <div class="button-group">
                <button type="submit" id="purchase-btn">Beli</button>
                <a href="bootstrap.php" class="btn-kembali">Kembali</a>
            </div>
        </form>
    </div>

    <script>
        function updateTotalPrice() {
            const flowerPrice = document.getElementById("flower-type").selectedOptions[0].getAttribute("data-price");
            const quantity = document.getElementById("quantity").value;
            const totalPrice = quantity * flowerPrice;
            document.getElementById("total-price").innerText = Number(totalPrice).toLocaleString('id-ID');
            document.getElementById("hidden-total-price").value = totalPrice;
        }

        document.getElementById("flower-type").addEventListener("change", updateTotalPrice);
        document.getElementById("quantity").addEventListener("input", updateTotalPrice);
        window.onload = updateTotalPrice;
    </script>
</body>
</html>
