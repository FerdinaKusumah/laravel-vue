<html>
<head>
	<title>Edit Katalog</title>
</head>

<?php
	include_once("../connect.php");
	$id = $_GET['id'];

    $katalog = mysqli_query($mysqli, "SELECT * FROM katalogs");

    while($katalog_data = mysqli_fetch_array($katalog))
    {
    	$nama = $katalog_data['nama'];
    }
?>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="edit.php?id=<?php echo $id; ?>" method="post">
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
		if(isset($_POST['update'])) {

			$nama = $_POST['nama'];
			
			include_once("../connect.php");

			$result = mysqli_query($mysqli, "UPDATE katalogs SET nama = '$nama' WHERE id = '$id';");
			
			header("Location:index.php");
		}
	?>
</body>
</html>