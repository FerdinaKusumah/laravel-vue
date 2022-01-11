<html>
<head>
	<title>Edit Penerbit</title>
</head>

<?php

	$penerbit = $_GET['nama_penerbit'];
	
	include_once("connect.php");
	$penerbit = mysqli_query($conn, "SELECT * FROM penerbits ORDER BY nama_penerbit");

    while($penerbit_data = mysqli_fetch_array($penerbit))
    {
    	$nama_penerbit = $penerbit_data['nama_penerbit'];
    	$email = $penerbit_data['email'];
    	$telp = $penerbit_data['telp'];
    	$alamat = $penerbit_data['alamat'];
    }
?>



<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>

	<form action="edit.php?nama_penerbit=<?php echo $nama_penerbit; ?>" method="post">
		<table width="25%" border="0">
			<tr> 
				<td>Nama Penerbit</td>
				<td style="font-size: 11pt;"><?php echo $nama_penerbit; ?> </td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
			</tr>
			<tr> 
				<td>Telpon</td>
				<td><input type="text" name="telp" value="<?php echo $telp; ?>"></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $alamat; ?>"></td>
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
			$nama_penerbit = $_GET['nama_penerbit'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$alamat = $_POST['alamat'];

			print_r($nama_penerbit ."\n");
			print_r($email ."\n");
			print_r($telp ."\n");
			print_r($alamat."\n");

			
			//die();


			$result = mysqli_query($conn, "UPDATE penerbits SET nama_penerbit = '$nama_penerbit', email='$email', telp='$telp', alamat ='$alamat' WHERE nama_penerbit = '$penerbit' ");

			header("location:index.php");

		}
	?>


</body>
</html>