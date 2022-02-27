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
$penerbit = mysqli_query($con, "SELECT * FROM penerbit");
$pengarang = mysqli_query($con, "SELECT * FROM pengarang");
$katalog = mysqli_query($con, "SELECT * FROM katalog");
?>

<body>
    <a href="index.php">Go to home</a>
    <br /><br />
    <form action="add.php" method="post">
        <table width="25%" border="0">
            <tr>
                <td>ISBN</td>
                <td><input type="text" name="isbn"></td>
            </tr>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul"></td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td><input type="text" name="tahun"></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td>
                    <select name="id_penerbit">
                        <?php
                        while ($row = mysqli_fetch_array($penerbit)) {
                            echo "<option value='" . $row['id_penerbit'] . "'>" . $row['nama_penerbit'] . "</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td>
                    <select name="id_pengarang">
                        <?php
                        while ($pengarang_row = mysqli_fetch_array($pengarang)) {
                            echo "<option value ='" . $pengarang_row['id_pengarang'] . "'>" . $pengarang_row['nama_pengarang'] . "</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Katalog</td>
                <td>
                    <select name="id_katalog">
                        <?php
                        while ($katalog_row = mysqli_fetch_array($katalog)) {
                            echo "<option value ='" . $katalog_row['id_katalog'] . "'>" . $katalog_row['nama'] . "</option>";
                        }
                        ?>

                    </select>
                </td>
            </tr>
            <tr>
                <td>Qty Stok</td>
                <td><input type="text" name="qty_stok"> </td>
            </tr>
            <tr>
                <td>Harga Pinjam</td>
                <td><input type="text" name="harga_pinjam"></td>

            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah Data"></td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['Submit'])) {
        $isbn = $_POST['isbn'];
        $judul = $_POST['judul'];
        $tahun = $_POST['tahun'];
        $id_penerbit = $_POST['id_penerbit'];
        $id_pengarang = $_POST['id_pengarang'];
        $id_katalog = $_POST['id_katalog'];
        $qty_stok = $_POST['qty_stok'];
        $harga_pinjam = $_POST['harga_pinjam'];
        include_once("configdb.php");
        // $result = mysqli_query($con, "insert into buku (isbn,judul,tahun,id_penerbit,id_pengarang,id_katalog,qty_stok,harga_pinjam)
        // values ($isbn,$judul,$tahun,$id_penerbit,$id_pengarang,$id_katalog,$qty_stok,$harga_pinjam)");
        // $result = mysqli_query($con, "INSERT INTO `buku` (`isbn`, `judul`, `tahun`, `id_penerbit`, `id_pengarang`, `id_katalog`, `qty_stok`, `harga_pinjam`) VALUES ('$isbn', '$judul', '$tahun', '$id_penerbit', '$id_pengarang', '$id_katalog', '$qty_stok', '$harga_pinjam');");
        $result = mysqli_query($con, "INSERT INTO buku(isbn,judul,tahun,id_penerbit,id_pengarang,id_katalog,qty_stok,harga_pinjam) VALUES('$isbn','$judul','$tahun','$id_penerbit','$id_pengarang','$id_katalog','$qty_stok','$harga_pinjam');");
        // header("location:index.php");
        // print_r($isbn, $judul);
        // print_r($result);
        print_r($_POST);
        // if (!$result) {
        //     echo ("Error description: " . $con->error);
        // } else {
        //     header("location:index.php");
        // }
    }
    ?>
</body>

</html>