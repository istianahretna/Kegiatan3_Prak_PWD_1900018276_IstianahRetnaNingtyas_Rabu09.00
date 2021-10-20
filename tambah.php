<html>
    <head>
        <title>Tambah data mahasiswa</title>
        </head>
            <body>
            <a href="index.php">Go to Home</a>
            <br/><br/>

            <!-- method post untuk menangkkap data yang terinput untuk dikirim dan diproses oleh database  -->
            <form action="tambah.php" method="post" name="form1"> 
            <table width="25%" border="0">
            <tr>
            <td>Nim</td>
            <td><input type="text" name="Nim"></td>
            </tr>
            <tr>
            <td>Nama</td>
            <td><input type="text" name="Nama"></td>
            </tr>
            <tr>
            <td>Gender (L/P)</td>
            <td><input type="text" name="Jenis_Kelamin"></td>
            </tr>
            <tr>
            <td>Alamat</td>
            <td><input type="text" name="Alamat"></td>
            </tr>
            <tr>
            <td>Tgl Lahir</td>
            <td><input type="text" name="Tgl_Lahir"></td>
            </tr>
            <tr>
            <td></td>
            <td><input type="submit" name="Submit" value="Tambah"></td>
            </tr>
            </table>
            </form>

            <?php
            //melakukan mengecek data pada formulir yang dikirimkan, dan akan memasukkan data formulir ke dalam tabel pengguna.
            if(isset($_POST['Submit'])) { //ketika di submit maka data akan di proses
            $nim = $_POST['Nim']; 
            $nama = $_POST['Nama']; 
            $jkel = $_POST['Jenis_Kelamin']; 
            $alamat = $_POST['Alamat']; 
            $tgllhr = $_POST['Tgl_Lahir']; 
            
            include_once("koneksi.php");

            //Masukkan data pengguna ke dalam tabel mahasiswa
            $result = mysqli_query($con, "INSERT INTO mahasiswa(Nim,Nama,Jenis_Kelamin,Alamat,Tgl_Lahir) 
                                            VALUES('$nim','$nama', '$jkel','$alamat','$tgllhr')");

            echo "Data berhasil disimpan. <a href='index.php'>View Users</a>";
            }
        ?>
    </body>
</html>
