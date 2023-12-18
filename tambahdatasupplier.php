<?php
//menambah datasupplier
if(isset($_POST['tambahdatasupplier'])){
  $nama_supplier = $_POST['nama_supplier'];
  $alamat = $_POST['alamat'];
  $no_telepon = $_POST['no_telepon'];

  $addtotable =mysqli_query($koneksi, "insert into data_supplier (nama_supplier, alamat, no_telepon) values('$nama_supplier','$alamat','$no_telepon')");
  if($addtotable){
    header('location:datasupplier.php');
  } else {
    echo 'Gagal';
    header('location:datasupplier.php');
  }
}
?>