<?php
	include_once("connect.php");
	$katalog = mysqli_query($conn, "SELECT * FROM katalogs
		ORDER BY nama ASC");
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
			<h5><a href="../index.php">Penerbit</a></h5>
		</div>
		<div class="col-md-2 text-center">
			<h5><a href="../index.php">Pengarang</a></h5>
		</div>
		<div class="col-md-2 text-center">
			<h5><a href="index.php">Katalog</a></h5>
		</div>
</center>

<div class="col-md-2 text-center"><a href="add.php">Add New Katalogs</a><br/><br/></div>
	
	<table width="80%" border="1">
		<div class="row">
			<div class="col-md-12">
			<table class="table table-bordered">
		<tr>
			<td class="text-center">Id Katalog</td>
			<td class="text-center">Nama Katalog</td>
			<td class="text-center">Aksi</td>
		</tr>
			
		<?php
			while($katalog_data = mysqli_fetch_array($katalog)){
				echo "<tr>";
				echo "<td>".$katalog_data['id']. "</td>";
				echo "<td>".$katalog_data['nama']. "</td>";
				echo "<td><a href='edit.php?>nama=$katalog_data[nama]'>Edit</a> | <a class='btn btn-dager' href='delete.php?nama=$katalog_data[nama]'>Delete</a></td></tr>";
			}
		?>
			</table>		
			</div>
		</div>

	</table>
</body>
</html>