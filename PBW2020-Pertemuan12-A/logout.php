<!-- untuk logout dan kembali ke halaman login -->
<?php 
session_start();
session_destroy();
header("location:index.php");
?>