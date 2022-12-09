<?php
    include "koneksi.php";

    $id = $_GET['id'];
    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];
    $notelp = $_GET['notelp'];
    $jk = $_GET['jk'];
    $agama = $_GET['agama'];

    $query = "update member set nama='$nama', alamat='$alamat', notelp='$notelp', jk='$jk', agama='$agama' where id='$id'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "Berhasil update data ke database";
?>
<?php
    }else{
        echo "Gagal update data". mysqli_error($connect);
    }
?>