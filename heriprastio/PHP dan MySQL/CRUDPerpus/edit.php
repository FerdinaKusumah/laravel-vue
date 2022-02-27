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
$isbn = $_GET["isbn"];
$data_buku = mysqli_query($con, "select * from buku where isbn = '" .  $isbn . "'");
// var_dump($data_buku);
$data_penerbit = mysqli_query($con, "SELECT * FROM penerbit");
// print_r($data_penerbit);
$data_pengarang = mysqli_query($con, "SELECT * FROM pengarang");
$data_katalog = mysqli_query($con, "SELECT * FROM katalog");
// print_r($data_buku);
// die();
while ($row_buku = mysqli_fetch_array($data_buku)) {
    $judul = $row_buku['judul'];
    $isbn = $row_buku['isbn'];
    $tahun = $row_buku['tahun'];
    $id_penerbit = $row_buku['id_penerbit'];
    $id_pengarang = $row_buku['id_pengarang'];
    $id_katalog = $row_buku['id_katalog'];
    $qty_stok = $row_buku['qty_stok'];
    $harga_pinjam = $row_buku['harga_pinjam'];
    // print_r($row_buku);
}


?>

<body>
    <a href="index.php" class="link-info">Go to home</a>
    <br><br />
    <form method="post" action="edit.php?isbn=<?php echo $isbn; ?>">
        <table width="25%" border="0" cellspacing="2">
            <tr>
                <td class="myformat">ISBN</td>
                <td class="myformat" style="font-size: 11ptl;"><?php echo $isbn; ?></td>

            </tr>
            <tr>
                <td class="myformat">Judul</td>
                <td><input type="text" name="judul" value="<?php echo $judul; ?>"> </td>
            </tr>
            <tr>
                <td class="myformat">Tahun</td>
                <td><input type="text" name="tahun" value="<?php echo $tahun; ?>"> </td>
            </tr>
            <tr>
                <td class="myformat">Penerbit</td>
                <td>
                    <select name="id_penerbit">
                        <?php
                        while ($row_data_penerbit = mysqli_fetch_array($data_penerbit)) {
                            echo "<option value='" . $row_data_penerbit['id_penerbit'] . "'>" . $row_data_penerbit['nama_penerbit'] . "</option>";
                        }
                        ?>


                    </select>
                </td>
            </tr>
            <tr>
                <td class="myformat">Pengarang</td>
                <td>
                    <select name="id_pengarang">
                        <?php
                        while ($row_data_pengarang = mysqli_fetch_array($data_pengarang)) {
                            echo "<option value='" . $row_data_pengarang['id_pengarang'] . "'>" . $row_data_pengarang['nama_pengarang'] . "</option>";
                        }
                        ?>
                </td>
            </tr>
            <tr>
                <td class="myformat">Katalog</td>
                <td>
                    <select name="id_katalog">
                        <?php
                        while ($row_data_katalog = mysqli_fetch_array($data_katalog)) {
                            // echo "<option value='" . $row_data_katalog['id_katalog'] . "'>" . $row_data_katalog['nama'] . "</option>";
                            echo "<option " . ($row_data_katalog['id_katalog'] == $id_katalog ? 'selected' : '') . " value='" . $row_data_katalog['id_katalog'] . "'>" . $row_data_katalog['nama'] . "</option>";
                        }
                        ?>
                </td>
            </tr>
            <tr>
                <td class="myformat">Qty Stok</td>
                <td><input type="text" name="qty_stok" value"<?php echo $qty_stok; ?>"</td>

            </tr>
            <tr>
                <td class="myformat">Harga Pinjam</td>
                <td><input type="text" name="harga_pinjam" value"<?php echo $harga_pinjam; ?>"</td>

            </tr>
            <tr>
                <td></td>
                <td><input class="btn" type="submit" name="update" value="Update"></td>
            </tr>

        </table>
    </form>
    <?php
    if (isset($_POST['update'])) {
        # code...
        $isbn = $_GET['isbn'];
        $judul = $_POST['judul'];
        $tahun = $_POST['tahun'];
        $id_penerbit = $_POST['id_penerbit'];
        $id_pengarang = $_POST['id_pengarang'];
        $id_katalog = $_POST['id_katalog'];
        $qty_stok = $_POST['qty_stok'];
        $harga_pinjam = $_POST['harga_pinjam'];
        include_once("configdb.php");
        $query = mysqli_query($con, "UPDATE buku SET judul='$judul', tahun='$tahun', id_penerbit='$id_penerbit', id_pengarang='$id_pengarang', id_katalog='$id_katalog', qty_stok='$qty_stok', harga_pinjam='$harga_pinjam' WHERE isbn='$isbn';");
        // print_r($_POST);
        header("Location:index.php");
    }
    ?>
</body>

</html>