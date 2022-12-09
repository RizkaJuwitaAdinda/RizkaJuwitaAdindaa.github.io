<?php
    $connect = mysqli_connect("localhost", "root", "", "tugas12");

    if ($connect) {
        echo "Koneksi ke MySQL berhasil <br> <br>";
    } else {
        echo "Koneksi ke MySQL gagal" . mysqli_connect_error();
    }

    $id = $_GET['id'];
    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];
    $notelp = $_GET['notelp'];
    $jk = $_GET['jk'];
    $agama = $_GET['agama'];

    $sql = "INSERT INTO member values('$id', '$nama', '$alamat', '$notelp', '$jk', '$agama')";

    if (mysqli_query($connect,$sql)) {
        echo "Selamat anda berhasil masuk fearless <br> <br>";
    }else{
        echo "Data yang anda masukkan salah<br>". mysqli_error($connect);
    }

    echo "<a href='index.php'>Kembali ke main menu</a>";
    mysqli_close($connect);