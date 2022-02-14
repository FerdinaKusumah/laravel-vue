<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once("configdb.php");
    $isbn = $_GET["isbn"];
    $data_buku = mysqli_query($con, "SELECT * FROM buku WHERE isbn='isbn'");
    $data_penerbit = mysqli_query($con, "SELECT * FROM penerbit");
    $data_pengarang = mysqli_query($con, "SELECT * FROM pengarang");
    $data_katalog = mysqli_query($con, "SELECT * FROM katalog");
    while ($row_buku = mysqli_fetch_array($data_buku)) {
        $judul = $row_buku['judul'];
        $isbn = $row_buku['isbn'];
        $tahun = $row_buku['tahun'];
        $id_penerbit = $row_buku['id_penerbit'];
        $id_pengarang = $row_buku['id_pengarang'];
        $id_katalog = $row_buku['id_katalog'];
        $qty_stok = $row_buku['qty_stok'];
        $harga_pinjam = $row_buku['harga_pinjam'];
    }


    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="index.php">Go to home</a>
    <br><br />

</body>

</html>