<?php 
include('koneksi.php');
// $ambilsemuadatabarangmasuk = mysqli_query($koneksi, "SELECT `data_barang`.`nama_barang`, 
// `barang_masuk`.`jumlah`, `jenis_barang`.`jenis_barang`, data_supplier.nama_supplier,
// barang_masuk.tanggal_masuk FROM barang_masuk 
// INNER JOIN data_barang ON barang_masuk.id_barang=data_barang.id_barang
// INNER JOIN jenis_barang ON data_barang.id_jenis_barang=jenis_barang.id_jenis
// INNER JOIN data_supplier ON barang_masuk.id_supplier=data_supplier.id_supplier");
// $no = 1;
// while($data=mysqli_fetch_array($ambilsemuadatabarangmasuk)){
//   $nama_barang = $data['nama_barang'];
//   $jumlah = $data['jumlah'];
//   $jenis_barang = $data['jenis_barang'];
//   $supplier = $data['nama_supplier'];
//   $tanggal_masuk = $data['tanggal_masuk'];
// }
	//Array ( [nama_barang] => kecap [jumlah] => 6 [jenis_barang] => bahan baku [supplier] => bambang [tanggal_masuk] => 2023-11-08 ) 1
	$id_barang = $_POST['id_barang'];
	$nama_barang = $_POST['nama_barang'];
	$jumlah = $_POST['jumlah'];
	$jenis_barang = $_POST['jenis_barang'];
	$supplier = $_POST['supplier'];
	$tanggal_masuk = $_POST['tanggal_masuk'];
	
	// if ($_GET['notif']) {
	// 	echo $_GET['notif'];
	// }

	if(empty($nama_barang)){
	    header("Location:Edit_barangmasuk.php?data={$id_barang}&notif=editkosong&jenis=nama_barang");
	}else if(empty($jumlah)){
	    header("Location:Edit_barangmasuk.php?data={$id_barang}&notif=editkosong&jenis=jumlah");
	}else if(empty($jenis_barang)){
	    header("Location:Edit_barangmasuk.php?data={$id_barang}&notif=editkosong&jenis=jenis_barang");
	}else if(empty($supplier)){
	    header("Location:Edit_barangmasuk.php?data={$id_barang}&notif=editkosong&jenis=supplier");
	}else if(empty($tanggal_masuk)){
	    header("Location:Edit_barangmasuk.php?data={$id_barang}&notif=editkosong&jenis=tanggal_masuk");
	} else { // Tambahkan else di sini
 
		$sql = "UPDATE barang_masuk a 
		INNER JOIN data_barang b ON a.id_barang = b.id_barang 
		INNER JOIN jenis_barang c ON b.id_jenis_barang = c.id_jenis
		INNER JOIN data_supplier d ON a.id_supplier = d.id_supplier
		SET a.nama_barang ='$nama_barang', 
		a.jumlah = '$jumlah', 
		c.jenis_barang = '$jenis_barang', 
		d.nama_supplier = '$supplier', 
		a.tanggal_masuk = '$tanggal_masuk'
		WHERE a.id_barang_masuk = '$id_barang'";
		
		mysqli_query($koneksi, $sql);
 
		header("Location:barangmasuk.php?notif=editberhasil");
	}

?>
