<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <?php
    include_once("configdb.php");
    $data_penerbit = mysqli_query($con, "Select * from `penerbit` ");
    // var_dump($data_penerbit);
    ?>

</head>

<body class="px-5">
    <center class="mx-auto" style="width: 250px;">
        <a href="index.php">Buku</a>
        <a href="tambah_penerbit.php">Tambah Penerbit</a>

    </center>
    <table class="table" width="80%" border="1">
        <tr>
            <th>ID Penerbit</th>
            <th>Nama Penerbit</th>
            <th>Email Penerbit</th>
            <th>Telepon Penerbit</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        while ($row_data_penerbit = mysqli_fetch_array($data_penerbit)) {
            echo "<tr>";
            echo "<td>" . $row_data_penerbit['id_penerbit'] . "</td>";
            echo "<td>" . $row_data_penerbit['nama_penerbit'] . "</td>";
            echo "<td>" . $row_data_penerbit['email'] . "</td>";
            echo "<td>" . $row_data_penerbit['telp'] . "</td>";
            echo "<td>" . $row_data_penerbit['alamat'] . "</td>";
            echo "<td> <a class='btn btn-primary' href='editpenerbit.php?id_penerbit=$row_data_penerbit[id_penerbit]'>Edit</a>  <a class='btn btn-danger' href='delete_penerbit.php?=id_penerbit" . $row_data_penerbit['id_penerbit'] . " '>Hapus</a></td>";
        }
        ?>

    </table>
</body>


</html>