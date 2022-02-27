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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/my.css">
</head>

<body class="px-5">

    <center class="mx-auto" style="width: 250px;">
        <a href="index.php">Buku</a>
        <a href="indexpenerbit.php">Penerbit</a>
        <a href="indexpengarang.php">Pengarang</a>
        <a href="addkatalog.php">Katalog</a>
    </center>
    <a href="add.php">Add New Buku</a>
    <table class="table" width="80%" border=1>
        <tr>
            <th>ISBN</th>
            <th>Judul</th>
            <th>Tahun</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
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
            echo "<td><a class='btn btn-primary' href='edit.php?isbn=$row[isbn]'>Edit</a> | <a class='btn btn-danger' href='delete.php?isbn=" . $row['isbn'] . "'>Delete</a></td>";
        }
        ?>
    </table>
</body>

</html>