<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>CRUD</title>
  </head>
  <body>
    <!-- digunakan jika username atau password salah -->
  <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai!</div>";
		}
	}
    ?>
    <!-- form login-->
    <div class="container mt-3">
        <div class="row">
            <div class="col ">
                <div class="card w-50 mx-auto">
                    <h5 class="card-header">Halaman Login</h5>
                    <div class="card-body">
                        <form action="login.php" method="post"> <!-- digunakan untuk memanggil page login-->
                            <label>Username</label>
                            <input type="text" name="txtUsername" class="login"> <!-- input username-->
                            <label>Password</label>
                            <input type="password" name="txtPassword" class="login"> <!-- input username-->
                            <hr>
                            <input type="submit" class="button_login" value="LOGIN"> <!--tombol login-->
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>