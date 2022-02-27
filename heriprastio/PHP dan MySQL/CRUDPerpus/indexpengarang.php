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

<?php
include_once("configdb.php");
$datapengarang = mysqli_query($con, "select * from pengarang");
?>

<body class="px-5">
    <center class="mx-auto" style="width: 250px;">
        <a href="index.php">Buku</a>
        <a href="indexpenerbit.php">Penerbit</a>
    </center>
    <table class="table" width=80% border=1>
        <tr>
            <th>ID Pengarang</th>
            <th>Nama Pengarang</th>
            <th>Email</th>
            <th>Telepon Pengarang</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        while ($row_data_pengarang = mysqli_fetch_array($datapengarang)) {
            echo "<tr>";
            echo "<td>" . $row_data_pengarang['id_pengarang'] . "</td>";
            echo " <td>" . $row_data_pengarang['nama_pengarang'] . "</td>";
            echo " <td>" . $row_data_pengarang['email'] . "</td>";
            echo " <td>" . $row_data_pengarang['telp'] . "</td>";
            echo " <td>" . $row_data_pengarang['alamat'] . "</td>";
            echo "<td>
            <a class='btn btn-primary' href='editpengarang.php?id_pengarang=$row_data_pengarang[id_pengarang]'>Edit</a>|
            <a class='btn btn-danger' href='delete.php?id_pengarang=" . $row_data_pengarang['id_pengarang'] . "'/>Delete</a></td>";
        }
        ?>

    </table>

</body>

</html>