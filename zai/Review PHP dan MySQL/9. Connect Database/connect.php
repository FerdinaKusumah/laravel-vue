<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "perpus";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $database);



// Check Connection
if (!$conn) {
    die("Connection Failed: ". mysqli_connect_error());
}

$sql = "SELECT * FROM buku JOIN katalog ON buku.id_katalog = katalog.id_katalog";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output Data
    while($row = $result->fetch_assoc()) {
        echo "<br> Isbn : ". $row["isbn"]. " | Judul Buku : ". $row["judul"]. " | Quantity : ". $row["qty_stok"]. " | Nama Katalog : ". $row["nama"];
    }
}
    $conn->close();