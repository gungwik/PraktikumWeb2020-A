<?php
include 'config.php';
$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
mysqli_query($connect,"UPDATE mahasiswa SET nim='$nim', nama='$nama', alamat='$alamat' WHERE id='$id'");
echo "<script>alert('Data Berhasil Diubah!');location='admin.php';</script>";
?>