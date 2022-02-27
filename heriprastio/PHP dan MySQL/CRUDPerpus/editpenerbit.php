<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="css/my.css">
</head>
<?php
include_once("configdb.php");
$idpenerbit = $_GET["id_penerbit"];
$data_penerbit = mysqli_query($con, "select * from penerbit where id_penerbit = '" . $idpenerbit . "'");
if (!$data_penerbit) {
    echo "Error" . $con->error;
}
while ($row_edit_penerbit = mysqli_fetch_array($data_penerbit)) {
    $nama_penerbit = $row_edit_penerbit['nama_penerbit'];
    $emailpenerbit = $row_edit_penerbit['email'];
    $telp = $row_edit_penerbit['telp'];
    $alamat = $row_edit_penerbit['alamat'];
}
?>

<body>
    <center><a href="indexpenerbit.php">Go Index</a></center>
    <br><br>
    <form method="post" action="editpenerbit.php?id_penerbit=<?php echo $idpenerbit; ?>">
        <table width="25%" border="0" cellspacing="2">
            <tr>
                <td class="myformat">ID Penerbit</td>
                <td class="myformat"><?php echo $idpenerbit; ?></td>
            </tr>
            <tr>
                <td class="myformat">Nama Penerbit</td>
                <td><input type="text" name="namapenerbit" value="<?php echo $nama_penerbit; ?>"></td>
            </tr>
            <tr>
                <td class="myformat">Email Penerbit</td>
                <td><input type="text" name="emailpenerbit" value="<?php echo $emailpenerbit; ?>"></td>
            </tr>
            <tr>
                <td class="myformat">Email Penerbit</td>
                <td><input type="text" name="telp" value="<?php echo $telp; ?>"></td>
            </tr>
            <tr>
                <td class="myformat">Alamat Penerbit</td>
                <td> <textarea name="alamat" cols="20" rows="7"><?php echo $alamat; ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input class="btn" type="submit" name="update" value="Update"></td>
            </tr>

        </table>
    </form>
    <?php
    if (isset($_POST['update'])) {
        $idpenerbit = $_GET['id_penerbit'];
        $nama_penerbit = $_POST['namapenerbit'];
        $email  = $_POST['emailpenerbit'];
        $telp = $_POST['telp'];
        $alamat = $_POST['alamat'];
        include_once("configdb.php");
        $query_update = mysqli_query($con, "update penerbit set nama_penerbit = '$nama_penerbit', email='$email', telp='$telp', alamat='$alamat' where id_penerbit = '$idpenerbit';");
        header("Location:indexpenerbit.php");
    }
    ?>

</body>

</html>