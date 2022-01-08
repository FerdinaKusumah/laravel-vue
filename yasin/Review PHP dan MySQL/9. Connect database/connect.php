<?php
$severname = "localhost";
$database = "perpustakaan";
$username = "root";
$password = "";

// Membuat Koneksi
$conn = mysqli_connect($severname, $username, $password, $database);

// Cek Koneksi
if (!$conn){
    die("Koneksi gagal! Karena:" . mysqli_connect_error());
}

// echo "Koneksi Sukses!!";
// mysqli_close($conn)

// Query Database
$sql = "SELECT anggotas.id, name 
        FROM anggotas 
        LEFT JOIN peminjaman 
        ON anggotas.id = peminjaman.id_anggota 
        WHERE id_anggota IS null;";
$result = $conn->query($sql);

if ($result->num_rows>0){
    // Output data tiap rows
    while ($row = $result->fetch_assoc()){
        echo "Buku: " . $row["id"] . " " . $row["name"] . "<br>";
    }
}
else {
    echo "tidak ada hasil";
}
$conn->close();

?>