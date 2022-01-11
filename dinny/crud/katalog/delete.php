<?php
	include_once("connect.php");

	$nama = $_GET['nama'];

	$result = mysqli_query($conn, "DELETE FROM katalogs WHERE nama='$nama'");

	// After delete redirect to Home, so that latest user list will be displayed.
	header("Location:index.php");
?> 