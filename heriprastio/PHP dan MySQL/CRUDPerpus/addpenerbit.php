<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="index.php">Go to home page</a>
    <br /><br />
    <form action="addpenerbit.php" method="post">
        <table width="25%" border="0">
            <tr>
                <td>Id Penerbit</td>
                <td><input type="text" name="id_penerbit"></td>
            </tr>
            <tr>
                <td>Nama Penerbit</td>
                <td><input type="text" name="nama_penerbit"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>No. Telepon</td>
                <td><input type="text" name="no_telepon"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['Submit'])) {
        $id_penerbit = $_POST['id_penerbit'];
        $nama_penerbit = $_POST['nama_penerbit'];
        $email = $_POST['email'];
        $telp = $_POST['no_telepon'];
        $alamat = $_POST['alamat'];
        include_once("configdb.php");
        $result = mysqli_query($con, "INSERT INTO penerbit(id_penerbit,nama_penerbit,email,telp,alamat) VALUES('$id_penerbit','$nama_penerbit','$email','$telp','$alamat')");
        // header("location:index.php");
        print_r($_POST);
    }
    ?>
</body>

</html>