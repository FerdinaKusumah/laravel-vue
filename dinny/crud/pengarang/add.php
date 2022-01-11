<?php
	include_once("connect.php");
	$pengarang = mysqli_query($conn, "SELECT * FROM pengarangs ");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Pengarang</title>
</head>
<body>
	<a href="index.php"> Go to Home</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Nama Pengarang</td>
				<td><input type="text" name="nama_pengarang"></td>
			</tr>	
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Telpon</td>
				<td><input type="text" name="telp"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Add"></td>
			</tr>
		</table>
	</form>
	<?php
		//check if form submitted, Insert form data into users table.
		if(isset($_POST['submit'])) {
			$nama_pengarang = $_POST['nama_pengarang'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$alamat = $_POST['alamat'];

			print_r($nama_pengarang ."\n");
			print_r($email ."\n");
			print_r($telp ."\n");
			print_r($alamat."\n");

			print_r("INSERT INTO pengarangs (nama_pengarang, email, telp, alamat) VALUES('$nama_pengarang', '$email', '$telp', '$alamat');");

			//die();

		//include database connection file
			include_once("connect.php");

		//Insert user data into table
			$insert = mysqli_query($conn, "INSERT INTO pengarangs (nama_pengarang, email, telp, alamat) VALUES('$nama_pengarang', '$email', '$telp', '$alamat');");

		//Show message when user added
			//echo "User added successfully. <a href ='index.php'>View User</a>";
		header("Location:index.php");
	//print_r($_POST);

	}
	?>
</body>
</html>