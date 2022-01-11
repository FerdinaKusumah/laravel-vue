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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<center>
	<div class="container">
		<div class="row" style="margin: 50px;">
			<div class="col-md-2"></div>
			<div class="col-md-2 text-center">
			<h5><a href="index.php">Buku</a></h5>
		</div>
		<div class="col-md-2 text-center">
			<h5><a href="../index.php">Penerbit</a></h5>
		</div>
		<div class="col-md-2 text-center">
			<h5><a href="../index.php">Pengarang</a></h5>
		</div>
		<div class="col-md-2 text-center">
			<h5><a href="../index.php">Katalog</a></h5>
		</div>
		</div>
	</div>
</center>

<div class="col-md-2 text-center"><a href="add.php">Add New Buku</a><br/><br/></div>
	
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