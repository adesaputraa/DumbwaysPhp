<?php 

//koneksi
include("config.php");

//get id
$id = $_GET['id'];

//Query delet
$result = mysqli_query($mysqli, "DELETE FROM tb_siswa WHERE id=$id");

// Aftert delet redirect to home
header("location:index.php");
?>