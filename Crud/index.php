<?php 

    include("config.php");

    $result = mysqli_query($mysqli, "SELECT * FROM 
    tb_siswa ORDER BY id DESC");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Data Siswa Dumbways</title>
</head>
<body>
    <form action="tambah.php" method="post" name="form1">
    <table width="80%" border="1">
        <tr>
            <th>Nis</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
            <?php 
                while($siswa_data =
                mysqli_fetch_array($result)){
                   
                    echo "<tr>";
                    
                    echo "<td>".$siswa_data['nis']
                    ."</td>";
                    
                    echo "<td>".$siswa_data['nama']
                    ."</td>";
                    
                    echo "<td>".$siswa_data['kelas']
                    ."</td>";
                    echo "<td>".$siswa_data['alamat']
                    ."</td>";

                    echo "<td><a href='edit.php?id=$siswa_data[id]'>Edit</a> |
                    <a href='delete.php?id=$siswa_data[id]'>Delete</a>
                    </td>";
                    echo "</tr>";
                }
            ?>
    </table>
            <br><br>

                <a href="tambah.php">Tambah Siswa</a>
    </form>
</body>
</html>