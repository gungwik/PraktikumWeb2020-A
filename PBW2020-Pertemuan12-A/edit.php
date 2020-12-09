<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- css yang digunakan-->
    <style>
        .jumbotron {
            width: 45%;
            height: 350px;
            margin: 50px auto;
        }

        table {
            margin: 50px auto;
        }

        label {
            margin-right: 25px;
        }

        input {
            width: 450px;
            margin-bottom: 10px;
        }

    </style>
    <title>Edit Data</title>
  </head>
  <body>
  <h2 align="center">Edit Data Mahasiswa</h2>
    <div class="jumbotron">
        <!-- sintaks untuk melakukan koneksi ke database-->
      <?php
      include 'config.php';
      $id = $_GET['id'];
      $data = mysqli_query($connect, "SELECT * FROM mahasiswa where id='$id'");
      while ($d = mysqli_fetch_array($data)){
      ?>
      <!-- digunakan untuk edit data yang kemudian disimpan pada database-->
      <form method="post" action="coba_edit.php">
        <table>
            <tr>
                <td>
                  <label>NIM</label>
                </td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="text" name="nim" value="<?php echo $d['nim']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                  <label>Nama</label>
                </td>
                <td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
            </tr>
            <tr>
                <td>
                  <label>Alamat</label>
                </td>
                <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
            </tr>
        </table>
        <button type="submit" class="btn btn-secondary">
          <a href="admin.php">Kembali</a>
        </button>
        <button type="submit" class="btn btn-success">Simpan</button>
      </form>
      <?php } ?>  
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>