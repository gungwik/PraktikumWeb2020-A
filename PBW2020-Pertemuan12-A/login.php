<!-- digunakan untuk login, jika username dan password ada di database maka dilanjutin dgn login, jika rolenya admin
maka page yg ditampilkan adalah admin.php, jika pegawai yg ditampilkan adalah pegawai.php, jika tidak ada antara keduanya 
maka akan ditampilkan pesan gagal-->
<?php
session_start();
include 'config.php';
$username=$_POST['txtUsername'];
$password=$_POST['txtPassword'];
$cek = mysqli_query($connect, "select * from user where username='$username' and password ='$password'");
$banyak = mysqli_num_rows($cek);
if($banyak > 0){
    $data = mysqli_fetch_assoc($cek);

    if($data['role']=="admin"){
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "admin";
        header("location:admin.php");
    }else if($data['role']=="pegawai"){
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "admin";
        header("location:pegawai.php");
    }else{
        header("location:index.php?pesan=gagal");
    }
}else{
    header("location:index.php?pesan=gagal");
}

?>