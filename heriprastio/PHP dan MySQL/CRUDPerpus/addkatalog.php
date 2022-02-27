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

<body>
    <a href="index.php">Go to home</a>
    <br /><br />
    <form method="post" action="addkatalog.php">
        <table border="0">
            <tr>
                <td>ID Katalog</td>
                <td><input type="text" name="id_katalog"></td>
            </tr>
            <tr>
                <td>Nama Katalog</td>
                <td><input type="text" name="nama_katalog"></td>
            </tr>
            <tr>
                <td></td>
                <td><input class="btn" type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['Submit'])) {
        # code...
        $idkatalog = $_POST['id_katalog'];
        $namakatalog = $_POST['nama_katalog'];
        include_once("configdb.php");
        $result = mysqli_query($con, "INSERT INTO katalog(id_katalog,nama) VALUES('$idkatalog','$namakatalog')");
        print_r($_POST);
    }
    ?>

</body>

</html>