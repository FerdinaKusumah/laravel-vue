<?php
$server = "localhost";
$db = "perpusdb";
$username = "root";
$pass = "";

$con = mysqli_connect($server, $username, $pass, $db);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM buku";
$sql_join = "SELECT nama, telp, alamat, tgl_pinjam, tgl_kembali from anggota join peminjaman on peminjaman.id_anggota = anggota.id_anggota join detail_peminjaman on detail_peminjaman.id_pinjam = peminjaman.id_pinjam;";
$result = mysqli_query($con, $sql);
$result_join = mysqli_query($con, $sql_join);
// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         echo "Buku : " . $row['judul'] . " " . $row['tahun'] . " " . $row['id_penerbit'] .  " " . $row['qty_stok'] . "<br>";
//     }
// } else 
// if ($result_join->num_rows > 0) {
//     while ($row = $result_join->fetch_assoc()) {
//         echo "Nama : " . $row['nama'] . " " . $row['telp'] . " " . $row['tgl_pinjam'] .  " " . $row['tgl_kembali'] . "<br>";
//     }
// }
while ($row = mysqli_fetch_array($result)) {
    echo "Nama Buku : " . $row['judul'] . " " . $row['tahun'] . " " . $row['id_penerbit'] .  " " . $row['qty_stok'] . "<br>";
}
while ($row_dua = mysqli_fetch_array($result_join)) {
    echo "Nama Peminjam Buku : " . $row_dua['nama'] . " " . $row_dua['telp'] . " " . $row_dua['alamat'] .  " " . $row_dua['tgl_pinjam'] . " " . $row_dua['tgl_kembali'] . "<br>";
}
