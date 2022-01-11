<?php
	include_once("connect.php");
	$buku = mysqli_query($conn, "SELECT bukus. * , nama_pengarang, nama_penerbit, katalogs.nama as nama_katalog FROM bukus
		LEFT JOIN pengarangs ON pengarangs.id = bukus.id_pengarang
		LEFT JOIN penerbits ON penerbits.id = bukus.id_penerbit
		LEFT JOIN katalogs ON katalogs.id = bukus.id_katalog
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
			while($buku_data = mysqli_fetch_array($buku)){
				echo "<tr>";
				echo "<td>".$buku_data['isbn']. "</td>";
				echo "<td>".$buku_data['judul']. "</td>";
				echo "<td>".$buku_data['tahun']. "</td>";
				echo "<td>".$buku_data['nama_pengarang']. "</td>";
				echo "<td>".$buku_data['nama_penerbit']. "</td>";
				echo "<td>".$buku_data['nama_katalog']. "</td>";
				echo "<td>".$buku_data['qty_stok']. "</td>";
				echo "<td>".$buku_data['harga_pinjam']. "</td>";
				echo "<td><a href='edit.php?>isbn=$buku_data[isbn]'>Edit</a> | <a class='btn btn-dager' href='delete.php?isbn=$buku_data[isbn]'>Delete</a></td></tr>";
			}
		?>
	</table>
</body>
</html>