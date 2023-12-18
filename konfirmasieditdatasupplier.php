<?php 
session_start();
include('koneksi.php');
$id = $_POST['id_barang'];
$nama_supplier = $_POST['nama_supplier'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

if($_GET['notif']){
	$notif = $_GET['notif'];
}

if(empty($nama_supplier)){
	header("Location:Edit_supplier.php?data={$id}&notif=editkosong&jenis=nama_supplier");
}else if(empty($alamat)){
	header("Location:Edit_supplier.php?data={$id}&notif=editkosong&jenis=alamat");
}else if(empty($no_telp)){
	header("Location:Edit_supplier.php?data={$id}&notif=editkosong&jenis=no_telp");
} else { 

	$sql = "UPDATE data_supplier SET nama_supplier = '$nama_supplier', alamat = '$alamat', no_telp = '$no_telp' WHERE id_supplier = '$id'";

	mysqli_query($koneksi, $sql);

	header("Location:datasupplier.php?notif=editberhasil");
}
?>
