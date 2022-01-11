<?php
	include_once("connect.php");
	$katalog = mysqli_query($conn, "SELECT * FROM katalogs
		ORDER BY nama ASC");
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

<a href="add.php">Add New Katalogs</a><br/><br/>
	
	<table width="80%" border="1">
		<tr>
			<td>Id Katalog</td>
			<td>Nama Katalog</td>
			<td>Aksi</td>
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
</body>
</html>