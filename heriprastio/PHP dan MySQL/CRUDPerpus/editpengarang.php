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

<?php include_once("configdb.php");
$idpengarang = $_GET['id_pengarang'];
$data_pengarang = mysqli_query($con, "select * from pengarang where id_pengarang='$idpengarang'");

while ($row_data_pengarang = mysqli_fetch_array($data_pengarang)) {
    $namapengarang = $row_data_pengarang['nama_pengarang'];
    $email = $row_data_pengarang['email'];
    $telp = $row_data_pengarang['telp'];
    $alamat = $row_data_pengarang['alamat'];
}
?>

<body>
    <form method="post" action="editpengarang?id_pengarang=<?php echo $idpengarang; ?>">
        <table width="25%" border="0" cellspacing="2">
            <tr>
                <td class="myformat">ID Pengarang</td>
                <td class="myformat"><?php echo $idpengarang; ?></td>
            </tr>
            <tr>
                <td class="myformat">Nama Pengarang</td>
                <td><input type="text" name="namapengarang" value="<?php echo $namapengarang; ?>"></td>
            </tr>
            <tr>
                <td class="myformat">Email</td>
                <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
            </tr>
            <tr>
                <td class="myformat">Telepon</td>
                <td><input type="text" name="telepon" value="<?php echo $telp; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" cols="20" rows="7"><?php echo $alamat; ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input class="btn" type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['update'])) {
        $idpengarang = $_GET['id_pengarang'];
        $namapengarang = $_POST['namapengarang'];
        $email = $_POST['email'];
        $telp = $_POST['telepon'];
        $alamat = $_POST['alamat'];
        include_once("configdb.php");
        $query = mysqli_query($con, "update pengarang set nama_pengarang='$namapengarang', email='$email', telp='$telp', alamat='$alamat' where id_pengarang='$idpengarang';");
        header("location:indexpengarang.php");
    } ?>
</body>

</html>