<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "latihan3";

$koneksi = mysqli_connect($servername,$username,$password, $database);
if(!$koneksi)
   die("Koneksi gagal");
print("Sukses Terhubung");
echo"<br>";
if(!mysqli_select_db($koneksi, $database))
die("database tidak bisa dipilih");
$hasil = mysqli_query($koneksi, "SELECT * FROM pengguna");
   if(!$hasil)
   die("permintaan gagal dilaksanakan");
$jumlah_kolom = mysqli_num_fields($hasil);
print("jumlah_kolom : $jumlah_kolom<br>\n");

$sql = "INSERT INTO pengguna (idpengguna,namapengguna,katasandi)
           VALUE('22090090', 'Reikhan', '123')"; 
       if (mysqli_query($koneksi, $sql) === TRUE) {
           echo "New record created successfully";
         } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
         }
mysqli_close($koneksi);
?>
