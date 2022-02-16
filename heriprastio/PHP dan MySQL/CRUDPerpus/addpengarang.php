<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="index.php">Go to home</a>
    <br /><br />
    <form action="addpengarang.php" method="post">
        <table width="25%" border="0">
            <tr>
                <td>ID Pengarang</td>
                <td><input type="text" name="id_pengarang"></td>
            </tr>
            <tr>
                <td>Nama Pengarang</td>
                <td><input type="text" name="nama_pengarang"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="text" name="telp"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <!-- <td><textarea name="alamat"></textarea></td> -->
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['Submit'])) {
        $idpengarang = $_POST['id_pengarang'];
        $namapeng = $_POST['nama_pengarang'];
        $email = $_POST['email'];
        $telp = $_POST['telp'];
        $alamat = $_POST['alamat'];
        include_once("configdb.php");
        // $result = mysqli_query($con, "insert into buku (isbn,judul,tahun,id_penerbit,id_pengarang,id_katalog,qty_stok,harga_pinjam)
        // values ($isbn,$judul,$tahun,$id_penerbit,$id_pengarang,$id_katalog,$qty_stok,$harga_pinjam)");
        // $result = mysqli_query($con, "INSERT INTO `buku` (`isbn`, `judul`, `tahun`, `id_penerbit`, `id_pengarang`, `id_katalog`, `qty_stok`, `harga_pinjam`) VALUES ('$isbn', '$judul', '$tahun', '$id_penerbit', '$id_pengarang', '$id_katalog', '$qty_stok', '$harga_pinjam');");
        $result = mysqli_query($con, "INSERT INTO pengarang (id_pengarang,nama_pengarang,email,telp,alamat) VALUES('$idpengarang','$namapeng, $email','$telp','$alamat');");
        // header("location:index.php");
        // print_r($isbn, $judul);
        print_r($_POST);
        // print_r($judul);
        if (!$result) {
            echo ("Error description: " . mysqli_error($con));
        } else {
            header("location:index.php");
        }
    }
    ?>
</body>

</html>