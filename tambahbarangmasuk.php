<?php

include('koneksi.php');
$nama_barang = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];
$jenis_barang = $_POST['jenis_barang'];
$supplier = $_POST['supplier'];
$tanggal_masuk = $_POST['tanggal_masuk'];

// Check if 'nama_barang' index exists in $_GET
if (isset($_POST['nama_barang'])) {
    $nama_barang_id = (int)$_POST['nama_barang'];

    // Assuming 'select' and 'update_barang' are functions in your 'koneksi.php' file
    $nama_barang = select("SELECT * FROM nama_barang WHERE id_barang = $nama_barang_id")[0];

    if (isset($_POST['tambah'])) {
        if (update_barang($_POST) > 0) {
            echo "<script>
                    alert('Data Barang Berhasil Diedit');
                    document.location.href = 'barangmasuk.php';
                    </script>";
        } else {
            echo "<script>
                    alert('Data Barang Gagal Diedit');
                    document.location.href = 'barangmasuk.php';
                    </script>";
        }
    }
} else {
    // Handle the case where 'nama_barang' index is not set in $_GET
    echo "Invalid request. Please provide a valid 'nama_barang' parameter.";
    exit();
}

?>

 <!-- form start -->
 <form action="" method="post">
    <input type="hidden" name="id_barang" value="<?= $nama_barang['id_barang']; ?>">

    <div class="mb-3">
        <label for="nama_barang" class="form-label">Nama Barang</label>
        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $nama_barang['nama_barang']; ?>" placeholder="Nama barang" required>
    </div>
    <div class="mb-3">
        <label for="jumlah" class="form-label">Jumlah</label>
        <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $jumlah['jumlah']; ?>" placeholder="Jumlah" required>
    </div>
    <div class="mb-3">
        <label for="jenis_barang" class="form-label">Kategori</label>
        <input type="text" class="form-control" id="jenis_barang" name="jenis_barang" value="<?= $jenis_barang['jenis_barang']; ?>" placeholder="Kategori" required>
    </div>
    <div class="mb-3">
        <label for="supplier" class="form-label">Supplier</label>
        <input type="text" class="form-control" id="supplier" name="supplier" value="<?= $supplier['supplier']; ?>" placeholder="Supplier" required>
    </div>
    <div class="mb-3">
        <label for="tanggal_masuk" class="form-label">Waktu Transaksi</label>
        <input type="text" class="form-control" id="tanggal_masuk" name="tanggal_masuk" value="<?= $tanggal_masuk['tanggal_masuk']; ?>" placeholder="Tanggal Masuk" required>
    </div>

    <button type="submit" name="edit" class="btn btn-primary" style="float: right;">Edit</button>
</form>