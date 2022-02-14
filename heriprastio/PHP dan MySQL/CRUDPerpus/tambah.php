<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
include_once("configdb.php");
$data_penerbit = mysqli_query($con, "SELECT * FROM penerbit");
$data_pengarang = mysqli_query($con, "SELECT * FROM pengarang");
$data_katalog = mysqli_query($con, "SELECT * FROM katalog");
?>

<body>
    <a href="index.php">Go to home</a>
    <br /><br />
    <form method="post" action="tambah.php">
        <table width="250%">
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
                        while ($row_penerbit = mysqli_fetch_array($data_penerbit)) {
                            echo "<option value='" . $row_penerbit['id_penerbit'] . "'>" . $row_penerbit['nama_penerbit'] . "</option>";
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
                        while ($row_pengarang = mysqli_fetch_array($data_pengarang)) {
                            echo "<option value='" . $row_pengarang['id_pengarang'] . "'>" . $row_pengarang['nama_pengarang'] . "</option>";
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
                        while ($row_katalog = mysqli_fetch_array($data_katalog)) {
                            echo "<option value='" . $row_katalog['id_katalog'] . "'>" . $row_katalog['nama'] . "</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Qty Stok</td>
                <td><input type="text" name="qty_stok"></td>
            </tr>
            <tr>
                <td>Harga Pinjam</td>
                <td><input type="text" name="harga_pinjam"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['Submit'])) {

        # code...
        $isbn = $_POST['isbn'];
        $judul = $_POST['judul'];
        $tahun = $_POST['tahun'];
        $id_penerbit = $_POST['id_penerbit'];
        $id_pengarang = $_POST['id_pengarang'];
        $id_katalog = $_POST['id_katalog'];
        $qty_stok = $_POST['qty_stok'];
        $harga_pinjam = $_POST['harga_pinjam'];
        include_once("configdb.php");
        $result_insert = mysqli_query($con, "INSERT INTO buku(isbn,judul,tahun,id_penerbit,id_pengarang,id_katalog,qty_stok,harga_pinjam) VALUES('$isbn','$judul','$tahun','$id_penerbit','$id_pengarang','$id_katalog','$qty_stok','$harga_pinjam');");
        header("location:index.php");
    }
    ?>
</body>

</html>