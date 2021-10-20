<?php
$host="localhost";  
$username="root";   
$password="";   
$databasename="akademik"; 

    // mebuat koneksi 
    $con=@mysqli_connect($host,$username,$password,$databasename);

    // mengecek koneksi, jika fungsi con/koneksi error maka akan gagal dan keluar
    if (!$con) {
     echo "Error: ".mysqli_connect_error(); 
        exit();
    }
?>
