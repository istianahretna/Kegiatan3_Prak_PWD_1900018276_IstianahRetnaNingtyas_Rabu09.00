<?php
//Menghubungkan data dengan mengkonfigurasi file koneksi database
include_once("koneksi.php");

$nim = $_GET['Nim'];

//Menghapus baris pengguna dari tabel berdasarkan NIM yang diperoleh
$result = mysqli_query($con, "DELETE FROM mahasiswa WHERE Nim='$nim'");

header("Location:index.php");
?>
