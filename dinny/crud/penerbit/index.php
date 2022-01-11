<?php
	include_once("connect.php");
	$penerbit = mysqli_query($conn, "SELECT * FROM penerbits
		ORDER BY nama_penerbit ASC");
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

<a href="add.php">Add New Penerbit</a><br/><br/>
	
	<table width="80%" border="1">
		<tr>
			<td>Nama Penerbit</td>
			<td>Email</td>
			<td>Telpon</td>
			<td>Alamat</td>
			<td>Aksi</td>
		</tr>
		<?php
			while($penerbit_data = mysqli_fetch_array($penerbit)){
				echo "<tr>";
				echo "<td>".$penerbit_data['nama_penerbit']. "</td>";
				echo "<td>".$penerbit_data['email']. "</td>";
				echo "<td>".$penerbit_data['telp']. "</td>";
				echo "<td>".$penerbit_data['alamat']. "</td>";
				echo "<td><a href='edit.php?>nama_penerbit=$penerbit_data[nama_penerbit]'>Edit</a> | <a class='btn btn-dager' href='delete.php?nama_penerbit=$penerbit_data[nama_penerbit]'>Delete</a></td></tr>";
			}
		?>
	</table>
</body>
</html>