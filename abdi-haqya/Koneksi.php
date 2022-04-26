<?php  
$servername = "localhost";
$database = "perpus";
$username = "root";
$password = "";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check Connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// echo "Connected succesfully";
// mysqli_close($conn);

$sql = "SELECT * FROM anggota ORDER BY nama ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while ($row = $result->fetch_assoc()) {
		echo "anggota : " . $row["nama"]. " " . $row["alamat"]. " " . $row["email"]. "<br>";
	}
} else {
	echo "0 results";
}
$conn->close();
?>