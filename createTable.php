<?php
$namaHost = "localhost";
$username = "root";
$password = "";
$database = "tugas12";

$connect = mysqli_connect($namaHost, $username, $password, $database);
if ($connect) {
    echo "Koneksi dengan MySQL berhasil <br>";
} else {
    echo "Koneksi dengan MySQL gagal" . mysqli_connect_error();
}
$sql = "CREATE TABLE member (
        id INT PRIMARY KEY,
        nama VARCHAR(100) NOT NULL,
        alamat VARCHAR(100) NOT NULL,
        notelp BIGINT,
        jk CHAR(20) NOT NULL,
        agama VARCHAR(50) NOT NULL)";
if (mysqli_query($connect, $sql)) {
    echo "Tabel Mahasiswa berhasil dibuat";
} else {
    echo "Tabel Mahasiswa gagal dibuat <br>" . mysqli_error($connect);
}

mysqli_close($connect);
