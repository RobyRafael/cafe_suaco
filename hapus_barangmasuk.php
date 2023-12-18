<?php
require 'koneksi.php';



if(isset($_GET['yakin'])){
$id_barang =  $_GET['id_barang_masuk'];

$delete_query = "DELETE FROM barang_masuk WHERE id_barang = '$id_barang'";
$delete_result = mysqli_query($conn, $delete_query);

if ($delete_result) {
    echo "<script>alert('Data berhasil dihapus')'window.location.href = 'barang_masuk.php'</script>";   
}
exit;
} else {
    return false;
}


?>