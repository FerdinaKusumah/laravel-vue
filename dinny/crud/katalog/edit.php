<html>
<head>
	<title>Edit Katalog</title>
</head>

<?php

	$katalog = $_GET['nama'];

	include_once("connect.php");
	$katalog = mysqli_query($conn, "SELECT * FROM katalogs ORDER BY nama");

    while($katalog_data = mysqli_fetch_array($katalog))
    {
    	$nama = $katalog_data['nama'];
    }
?>



<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>

	<form action="edit.php?nama_pengarang=<?php echo $nama_pengarang; ?>" method="post">
		<table width="25%" border="0">
			<tr>
				<td>Id Katalog</td>
				<td style="font-size: 11pt;"><?php echo $id; ?> </td>
			</tr>
			<tr> 
				<td>Nama Katalog</td>
				<td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
				
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>

	<?php

		// Check If form submitted, insert form data into users table.
		include_once("connect.php");
		if(isset($_POST['update'])) {
			$nama = $_POST['nama'];

			print_r($nama ."\n");

			
			//die();


			$result = mysqli_query($conn, "UPDATE katalogs SET nama = '$nama' WHERE id = '$id'; ");

			header("location:index.php");

		}
	?>


</body>
</html>