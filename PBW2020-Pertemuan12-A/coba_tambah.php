<?php 
include 'config.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

mysqli_query($connect, "INSERT INTO mahasiswa VALUES('','$nim','$nama','$alamat','')");
echo "<script>alert('Data Berhasil Ditambah!');location='admin.php';</script>";
?>