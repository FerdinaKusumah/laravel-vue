<html>
<head>
	<title>Edit Pengarang</title>
</head>

<?php
	include_once("../connect.php");
	$nama_pengarang = $_GET['nama_pengarang'];
    $pengarang = mysqli_query($mysqli, "SELECT * FROM pengarangs");

    while($pengarang_data = mysqli_fetch_array($pengarang))
    {
    	$nama_pengarang = $pengarang_data['nama_pengarang'];
    	$email = $pengarang_data['email'];
    	$telp = $pengarang_data['telp'];
		$alamat = $pengarang_data['alamat'];
    }
?>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="edit.php?nama_pengarang=<?php echo $nama_pengarang; ?>" method="post">
		<table width="25%" border="0">
			<tr> 
				<td>Nama Pengarang</td>
				<td style="font-size: 11pt;"><?php echo $nama_pengarang; ?> </td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
			</tr>
			<tr> 
				<td>Telp</td>
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
		if(isset($_POST['update'])) {

			$nama_pengarang = $_GET['nama_pengarang'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$alamat = $_POST['alamat'];
			
			include_once("../connect.php");

			$result = mysqli_query($mysqli, "UPDATE pengarangs SET alamat = '$alamat', email = '$email', telp = '$telp' WHERE nama_pengarang = '$nama_pengarang';");
			
			header("Location:index.php");
		}
	?>
</body>
</html>