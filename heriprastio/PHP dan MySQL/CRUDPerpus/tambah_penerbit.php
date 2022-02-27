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

<body>
    <h2>Tambah Penerbit</h2>
    <a href="index.php" class="px-5">Go to home</a>
    <br><br>
    <form method="post" action="tambah_penerbit.php">
        <table width="25%" border="0">
            <tr>
                <td class="myformat">ID Penerbit</td>
                <td><input type="text" name="id_pnrbit"></td>
            </tr>
            <tr>
                <td class="myformat">Nama Penerbit</td>
                <td><input type="text" name="nama_pnrbit"></td>
            </tr>
            <tr>
                <td class="myformat">Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td class="myformat">Telepon</td>
                <td><input type="text" name="telepon"></td>
            </tr>
            <tr>
                <td class="myformat">Alamat</td>
                <td class="myformat">
                    <textarea rows="4" cols="25" name="alamat"></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah Data"></td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['Submit'])) {
        # code...
        $idpenerbit = $_POST['id_pnrbit'];
        $namapnerbit = $_POST['nama_pnrbit'];
        $email = $_POST['email'];
        $telepon = $_POST['telepon'];
        $alamat = $_POST['alamat'];
        include_once("configdb.php");
        $result_insert = mysqli_query($con, "INSERT INTO penerbit(id_penerbit,nama_penerbit,email,telp,alamat) values('$idpenerbit','$namapnerbit','$email','$telepon','$alamat')");
        // header("Location:index.php");
        print_r($_POST);
        if (!$result_insert) {
            echo "Error" . $con->error;
        }
    }
    ?>
</body>

</html>