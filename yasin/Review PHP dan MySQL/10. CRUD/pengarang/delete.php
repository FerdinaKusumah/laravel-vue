<?php
include_once("../connect.php");
 
$nama_pengarang = $_GET['nama_pengarang'];
 
$result = mysqli_query($mysqli, "DELETE FROM pengarangs WHERE nama_pengarang='$nama_pengarang'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>