<?php

$isbn = $_GET['isbn'];
$result = mysqli_query($con, "DELETE FROM `buku` WHERE `isbn` = '$isbn'");

header("location:index.php");
