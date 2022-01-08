<?php
include_once("../connect.php");
 
$nama_penerbit = $_GET['nama_penerbit'];
 
$result = mysqli_query($mysqli, "DELETE FROM penerbits WHERE nama_penerbit='$nama_penerbit'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>