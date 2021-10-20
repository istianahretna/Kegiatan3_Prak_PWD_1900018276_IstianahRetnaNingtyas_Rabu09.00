<?php
// untuk koneksi database dengan mengkonfigurasi file koneksi.php
include_once("koneksi.php");

if(isset($_POST['update'])){
$nim = $_POST['Nim']; 
$nama=$_POST['Nama'];
$jkel=$_POST['Jenis_Kelamin'];
$alamat=$_POST['Alamat'];
$tgllhr=$_POST['Tgl_Lahir'];

// Fungsi untuk perbarui data pengguna pada database 
$result = mysqli_query($con, "UPDATE mahasiswa SET Nama='$nama',Jenis_Kelamin='$jkel',Alamat='$alamat',Tgl_Lahir='$tgllhr' WHERE Nim='$nim'");
//langsung menuju ke halaman index.php
header("Location: index.php");
}
?>

<?php
$nim = $_GET['Nim'];

//Mengambil data pengguna berdasarkan NIM 
$result = mysqli_query($con, "SELECT * FROM mahasiswa WHERE Nim='$nim'");

    while($user_data = mysqli_fetch_array($result)){
        $nim = $user_data['Nim'];
        $nama = $user_data['Nama'];
        $jkel = $user_data['Jenis_Kelamin'];
        $alamat = $user_data['Alamat'];
        $tgllhr = $user_data['Tgl_Lahir'];
    }
?>
<html>
    <head>
        <title>Edit Data Mahasiswa</title>
    </head>
    <body>
    <a href="index.php">Home</a>
    <br/><br/>
        <form name="update_mahasiswa" method="post" action="edit.php">
            <table border="0">
            <tr>
            <td>Nama</td>
            <td><input type="text" name="Nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr>
            <td>Gender</td>
            <td><input type="text" name="Jenis_Kelamin" value=<?php echo $jkel;?>></td>
            </tr>
            <tr>
            <td>alamat</td>
            <td><input type="text" name="Alamat" value=<?php echo $alamat;?>></td>
            </tr>
            <tr>
            <td>Tgl Lahir</td>
            <td><input type="text" name="Tgl_Lahir" value=<?php echo $tgllhr;?>></td>
            </tr>
            <tr>
            <td><input type="hidden" name="Nim" value=<?php echo $_GET['Nim'];?>></td>
            <td><input type="submit" name="update" value="Update"></td>
            </tr>
            </table>
        </form>
    </body>
</html>
