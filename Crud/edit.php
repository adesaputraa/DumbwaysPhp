<?php 

//include config
include("config.php");

//cek data jika ingin diupdate
if(isset($_POST['edit']))
{
    $id = $_POST['id'];

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    //edit siswa data 
    $result = mysqli_query($mysqli, "UPDATE tb_siswa SET nis='$nis',
    nama='$nama',kelas='$kelas',alamat='$alamat' WHERE id=$id");

    //REdirect kehalaman index
    header("Location: index.php");
}
?>

    <?php 
        //menampilkan data base on id
        // gettin id from url
        $id = $_GET['id'];

        //fetch siswa berdasarkan id
        $result = mysqli_query($mysqli, "SELECT * FROM tb_siswa
        WHERE id=$id");

        //perulangan
        while($siswa_data = mysqli_fetch_array($result))
        {
            $nis = $siswa_data['nis'];
            $nama = $siswa_data['nama'];
            $kelas = $siswa_data['kelas'];
            $alamat = $siswa_data['alamat'];
        }
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update siswa</title>
    </head>
    <body>
        <form nama="edit.php" method="post" action="edit.php">
        
            <table border="0">
                <tr>
                    <td>Nis</td>
                    <td><input type="text" name="nis" value="<?php echo $nis; ?>"</td>
                    
                    <tr></tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" value="<?php echo $nama; ?>"</td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td><input type="text" name="kelas" value="<?php echo $kelas; ?>"</td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="alamat" value="<?php echo $alamat; ?>"</td>
                    </tr>

                    <tr>
                        <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                        <td><input type="submit" name="edit" value="edit"</td>
                    </tr>
            </table>
        </form>
    </body>
    </html>