<?php
include 'koneksi.php';

if (isset($_GET['id_pembelian'])) {
    $id_pembelian = $_GET['id_pembelian'];

    // Eksekusi query delete
    $query = mysqli_query($conn, "DELETE FROM pembelian WHERE id_pembelian='$id_pembelian'");

    if ($query) {
        header("Location: index.php"); // kembali ke halaman data
        exit;
    } else {
        echo "Gagal menghapus data: " . mysqli_error($conn);
    }
} else {
    echo "ID tidak ditemukan.";
}
?>
