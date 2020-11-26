<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"> <!-- antisipasi jika web dibuka di negara yg tidak menggunakan huruf latin-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title> <!--digunakan untuk mengisi title web-->
    <link rel="stylesheet" href="style.css"> <!-- digunakan untuk menggunakan css-->
</head>
<body>
    <div class="main">
    <form action="" method="POST">
        <table class="table1" align="center"> <!-- membuat tabel-->
            <caption>Data Nilai Mahasiswa</caption> <!--judul tabel-->
            <tr>
                <td>NIM</td>
                <td><input type="text" class="nim" name="nim" placeholder="Isi NIM Anda" id="input"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" class="nama" name="nama" placeholder="Isi Nama Lengkap Anda" id="input"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" class="kelas" name="kelas" placeholder="Isi Kelas" id="input"></td>
            </tr>
            <tr>
                <td>Nilai 1</td>
                <td><input type="text" class="nilai1" name="nilai1" placeholder="Isi Nilai 1"></td>
            </tr>
            <tr>
                <td class="nim">Nilai 2</td>
                <td><input type="text" class="nilai2" name="nilai2" placeholder="Isi Nilai 2"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit" class="submit" name="submit" id="tombol-submit"></td>
            </tr>
        </table>
        </form>
        </div>
        <br><br>
        <?php
            if(isset($_POST["submit"])){
                $jumlahNilai = $_POST["nilai1"] + $_POST["nilai2"];
                $ratarata = ($_POST["nilai1"] + $_POST["nilai2"]) / 2;
                if ($ratarata>=75) {
                    $ket = "Lulus";
                } else{
                    $ket = "Tidak Lulus"; 
                }
            }
            if(isset($ratarata)){ ?>
            
        <table class="table2" align="center"> <!-- membuat tabel-->
            <caption>Data Nilai Mahasiswa</caption> <!--judul tabel-->
            <tr>
                <td>NIM</td>
                <td>
                    <?= $_POST["nim"]; ?>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><?= $_POST["nama"]; ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><?= $_POST["kelas"]; ?></td>
            </tr>
            <tr>
                <td>Nilai 1 </td>
                <td><?= $_POST["nilai1"]; ?></td>
            </tr>
            <tr>
                <td>Nilai 2 </td>
                <td><?= $_POST["nilai2"]; ?></td>
            </tr>
            <tr>
                <td>Jumlah Nilai</td>
                <td><?= $jumlahNilai; ?></td>
            </tr>
            <tr>
                <td>Rata-rata Nilai</td>
                <td><?= $ratarata; ?></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><?= $ket; ?></td>
            </tr>
            <?php } ?>
        </table>
</body>
</html>