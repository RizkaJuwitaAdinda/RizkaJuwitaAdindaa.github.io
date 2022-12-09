<?php
    include "koneksi.php";

    $id = $_GET['id'];

    $query = "delete from member where id='$id'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "Data berhasil dihapus <br>";
?>
<a href="member.php">Lihat data di Tabel</a> <br> <br>
<a href="index.php">Kembali ke menu utama</a>
<?php
    }else{
        echo "Data gagal dihapus". mysqli_error($connect);
    }
?>