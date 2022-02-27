<?php
include_once("configdb.php");
// $isbn = $_GET['isbn'];
$isbn = $_GET['isbn'];
$result = mysqli_query($con, "DELETE FROM buku WHERE isbn = '$isbn'");
print_r($result);
// if (!$result) {
# code...
// echo "gagal" . $con->error;
// }
header("location:index.php");
