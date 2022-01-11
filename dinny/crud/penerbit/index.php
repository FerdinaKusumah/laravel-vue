<?php
	include_once("connect.php");
	$penerbit = mysqli_query($conn, "SELECT * FROM penerbits
		ORDER BY nama_penerbit ASC");
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
			<h5><a href="../index.php">Buku</a></h5>
		</div>
		<div class="col-md-2 text-center">
			<h5><a href="index.php">Penerbit</a></h5>
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