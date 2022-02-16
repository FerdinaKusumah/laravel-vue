<?php
include_once("configdb.php");
$buku = mysqli_query($con, "SELECT buku.*, nama_pengarang, nama_penerbit, katalog.nama as nama_katalog from buku
left join pengarang on pengarang.id_pengarang = buku.id_pengarang
left join penerbit on penerbit.id_penerbit = buku.id_penerbit
left join katalog on katalog.id_katalog = buku.id_katalog
order by judul asc");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <center>
        <a href="index.php">Buku</a>
        <a href="#">Penerbit</a>
        <a href="addpengarang.php">Pengarang</a>
        <a href="#">Katalog</a>
    </center>
    <a href="add.php">Add New Buku</a>
    <table>
        <tr>
            <th>ISBN</th>
            <th>Judul</th>
            <th>Tahun</th>
            <th>Pengarang</th>
            <th>Katalog</th>
            <th>Stok</th>
            <th>Harga Pinjam</th>
            <th>Aksi</th>

        </tr>
        <?php
        while ($row = mysqli_fetch_array($buku)) {
            echo "<tr>";
            echo "<td>" . $row['isbn'] . "</td>";
            echo "<td>" . $row['judul'] . "</td>";
            echo "<td>" . $row['tahun'] . "</td>";
            echo "<td>" . $row['nama_pengarang'] . "</td>";
            echo "<td>" . $row['nama_penerbit'] . "</td>";
            echo "<td>" . $row['nama_katalog'] . "</td>";
            echo "<td>" . $row['qty_stok'] . "</td>";
            echo "<td>" . $row['harga_pinjam'] . "</td>";
        }
        ?>
    </table>
</body>

</html>