<?php
include 'config.php';
$id = $_GET['id'];
mysqli_query($connect,"DELETE FROM mahasiswa WHERE id='$id'");
echo "<script>alert('Data Berhasil Dihapus!');location='admin.php';</script>";
?>