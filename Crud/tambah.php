<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
</head>
<body>
    <a href="index.php">Kembali</a><br><br>

    <form action="tambah.php" method="post" name="form1">
        <table>
            <tr>
                <td>Nis</td>
                <td><input type="text" name="nis"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="tambah"></td>
            </tr>
        </table>
    </form>
        <!-- mengirimkan data kedatabase -->
        <?php 
            //Pengecekan jika form submit diisi pada form diatas
            if(isset($_POST['submit']))
            {
                $nis = $_POST['nis'];
                $nama = $_POST['nama'];
                $kelas = $_POST['kelas'];
                $alamat = $_POST['alamat'];
            

            //include database config
            include("config.php");

            // 
            $result = mysqli_query($mysqli, 
            "INSERT INTO tb_siswa(nis,nama,kelas,alamat) 
            VALUES('$nis','$nama','$kelas','$alamat') ");

            //massage
            echo "Siswa berhasil ditambah. 
            <a href='index.php'>View Siswa</a>";
            }
        ?>
</body>
</html>