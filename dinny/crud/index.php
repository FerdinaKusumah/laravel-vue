<?php
	include_once("connect.php");
	$buku = mysqli_query($mysqli, "SELECT bukus. * , nama_pengarang, nama_penerbit, katalogs.nama as nama_katalog FROM bukus
		LEFT JOIN pengarangs ON pengarangs.id_pengarang = bukus.id_pengarang
		LEFT JOIN penerbits ON penerbits.id_penerbit = bukus.id_penerbit
		LEFT JOIN katalogs ON katalogs.id_katalog = bukus.id_katalog
		ORDER BY judul ASC");
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

<a href="add.php">Add New Buku</a><br/><br/>
	
	<table width="80%" border="1">
		<tr>
			<td>ISBN</td>
			<td>Judul</td>
			<td>Tahun</td>
			<td>Pengarang</td>
			<td>Penerbit</td>
			<td>Katalog</td>
			<td>Stok</td>
			<td>Harga</td>
			<td>Aksi</td>
		</tr>
		<?php
			while($bukus = mysqli_array($buku)){
				echo "<tr>";
				echo "<td>".$bukus['isbn']. "</td>";
				echo "<td>".$bukus['judul']. "</td>";
				echo "<td>".$bukus['tahun']. "</td>";
				echo "<td>".$bukus['nama_pengarang']. "</td>";
				echo "<td>".$bukus['nama_penerbit']. "</td>";
				echo "<td>".$bukus['nama_katalog']. "</td>";
				echo "<td>".$bukus['qty_stok']. "</td>";
				echo "<td>".$bukus['harga_pinjam']. "</td>";
				echo "<td><a href='edit.php?>isbn=$bukus[isbn]'>Edit</a> | <a href='delete.php?isbn=$bukus[isbn]'>Delete</a></td></tr>";
			}
		?>
	</table>
</body>
</html>