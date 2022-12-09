<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telp.</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Aksi</th>
        </tr>
        <?php
            include "koneksi.php";

            $query = "select * from member";
            $result = mysqli_query($connect, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td> <?php echo $row["id"] ?> </td>
            <td> <?php echo $row["nama"] ?> </td>
            <td> <?php echo $row["alamat"] ?> </td>
            <td> <?php echo $row["notelp"] ?> </td>
            <td> <?php echo $row["jk"] ?> </td>
            <td> <?php echo $row["agama"] ?> </td>
            <td>
                <a href="hapus.php?id=<?php echo $row['id']; ?>">
                Hapus</a>
            </td>
        </tr>
        <?php
                }
            }else{
                echo "0 results";
            }
        ?>
    </table>
    <a href="index.php"><button>Back</button></a>
</body>
</html>