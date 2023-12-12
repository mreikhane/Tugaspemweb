<!DOCTYPE html>
<html>
<head>
    <title>Operasi Database PHP</title>
</head>
<body>

<?php
// Konfigurasi koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "latihan3";

// Buat koneksi
$conn = new mysqli($servername, $username, $password);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

// Buat database
$sqlCreateDB = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sqlCreateDB) === TRUE) {
    echo "Database '$dbname' berhasil dibuat atau sudah ada.<br>";
} else {
    echo "Error: " . $sqlCreateDB . "<br>" . $conn->error;
}

// Pilih database
$conn->select_db($dbname);

// Buat tabel
$sqlCreateTable = "CREATE TABLE IF NOT EXISTS pengguna (
    idpengguna INT AUTO_INCREMENT PRIMARY KEY,
    namapengguna VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
)";
if ($conn->query($sqlCreateTable) === TRUE) {
    echo "Tabel 'pengguna' berhasil dibuat atau sudah ada.<br>";
} else {
    echo "Error: " . $sqlCreateTable . "<br>" . $conn->error;
}

// Insert data
$sqlInsertData = "INSERT INTO pengguna (namapengguna, password) VALUES ('user1', 'pass123')";
if ($conn->query($sqlInsertData) === TRUE) {
    echo "Data berhasil disisipkan.<br>";
} else {
    echo "Error: " . $sqlInsertData . "<br>" . $conn->error;
}

// Update data
$sqlUpdateData = "UPDATE pengguna SET password = 'newpass' WHERE namapengguna = 'user1'";
if ($conn->query($sqlUpdateData) === TRUE) {
    echo "Data berhasil diperbarui.<br>";
} else {
    echo "Error: " . $sqlUpdateData . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>

</body>
</html>
