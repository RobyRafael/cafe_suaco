<?php
session_start();
include('koneksi.php'); // Sertakan file koneksi.php atau sesuaikan dengan kebutuhan

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id_barang'])) {
    // Ambil data dari formulir edit
    $id_barang = $_POST['id_barang'];
    $jumlah = $_POST['jumlah'];

    // Sesuaikan dengan struktur tabel dan field
    $query = "UPDATE barang_masuk SET jumlah = $jumlah WHERE id_barang = $id_barang";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Redirect ke halaman DataStok setelah berhasil disimpan
        header("Location: DataStok.php");
        exit;
    } else {
        // Handle kesalahan query
        echo "Gagal menyimpan perubahan data stok.";
        exit;
    }
} else {
    // Redirect jika tidak ada data yang dikirimkan
    header("Location: DataStok.php");
    exit;
}
?>
