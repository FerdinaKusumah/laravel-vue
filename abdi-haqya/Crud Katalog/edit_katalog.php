<html>
<head>
	<title>Edit Katalog</title>
</head>

<?php
	include_once("connect.php");
	$id_katalog = $_GET['id_katalog'];

    $katalog = mysqli_query($mysqli, "SELECT * FROM katalog");

    while($katalog_data = mysqli_fetch_array($katalog))
    {
    	$nama = $katalog_data['nama'];
    	$id_katalog = $katalog_data['id_katalog'];
    }
?>
 
<body>
	<a href="index_katalog.php">Go to Home</a>
	<br/><br/>
 
	<form action="edit_katalog.php?isbn=<?php echo $isbn; ?>" method="post">
		<table width="25%" border="0">
			<tr> 
				<td>Id Katalog</td>
				<td style="font-size: 11pt;"><?php echo $id_katalog; ?> </td>
			</tr>
			<tr> 
				<td>Nama</td>
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
		if(isset($_POST['update'])) {

			$id_katalog = $_GET['id_katalog'];
			$nama = $_POST['nama'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "UPDATE katalog SET nama = '$nama' WHERE id_katalog = '$id_katalog';");
			
			header("Location:index_katalog.php");
		}
	?>
</body>
</html>