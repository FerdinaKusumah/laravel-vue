<?php
	include_once("connect.php");
	$pengarang = mysqli_query($conn, "SELECT * FROM pengarangs
		ORDER BY nama_pengarang ASC");
?>

<!DOCTYPE html>
<html>
	<title>Homepage</title>
</head>
<body>

<center>
	<a href="index.php">Buku</a>
	<a href="#">Penerbit</a>
	<a href="#">Pengarang</a>
	<a href="#">Katalog</a>
</center>

<a href="add.php">Add New Pengarangs</a><br/><br/>
	
	<table width="80%" border="1">
		<tr>
			<td>Nama Pengarang</td>
			<td>Email</td>
			<td>Telpon</td>
			<td>Alamat</td>
			<td>Aksi</td>
		</tr>
		<?php
			while($pengarang_data = mysqli_fetch_array($pengarang)){
				echo "<tr>";
				echo "<td>".$pengarang_data['nama_pengarang']. "</td>";
				echo "<td>".$pengarang_data['email']. "</td>";
				echo "<td>".$pengarang_data['telp']. "</td>";
				echo "<td>".$pengarang_data['alamat']. "</td>";
				echo "<td><a href='edit.php?>nama_pengarang=$pengarang_data[nama_pengarang]'>Edit</a> | <a class='btn btn-dager' href='delete.php?nama_pengarang=$pengarang_data[nama_pengarang]'>Delete</a></td></tr>";
			}
		?>
	</table>
</body>
</html>