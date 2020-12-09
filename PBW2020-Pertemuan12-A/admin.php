<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Admin</title>
    <?php
    include 'config.php';
    ?>
  </head>
  <body>
  <div class="container mt-3">
        <div class="row">
            <div class="col ">
                <div class="card w-60 mx-auto">
                    <h5 class="card-header">Data Mahasiswa Universitas Sky Fly Sky Dope</h5>
                    <h7>Selamat Datang</h7>
                    <button type="button" class="btn btn-primary"><a href="tambah.php">Tambah Data</a></button> <!-- tombol untuk menambahkan data-->
                    <div class="card-body">
                    <table class="table"> <!-- tabel untuk menampilkan data mahasiswa-->
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                            <!-- sintaks untuk menampilkan data yg diambil dari database-->
                        <?php
                        $no = 1;
                        $data = mysqli_query($connect,"select * from mahasiswa");
                        while ($d = mysqli_fetch_array($data)){
                        ?>
                            <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['nim']; ?></td>
                            <td><?php echo $d['nama']; ?></td>
                            <td><?php echo $d['alamat']; ?></td>
                            <td>
                                <button type="button" class="btn btn-warning">
                                <a href="edit.php?id=<?php echo $d['id'];?>">Edit</a>
                                </button>
                                <button type="button" class="btn btn-danger">
                                <a href="delete.php?id=<?php echo $d['id'];?>">Delete</a>
                                </button>
                            </td>
                            </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                    </table>
                    </div>
                    <button type="button" class="btn btn-secondary"><a href="logout.php">Logout</a></button> <!-- tombol logout-->
                </div>
                
            </div>
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>