<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "perpus");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;
    $id_penerbit = htmlspecialchars($data["id_penerbit"]);
    $nama_penerbit = htmlspecialchars($data["nama_penerbit"]);
    $email = htmlspecialchars($data["email"]);
    $telp = htmlspecialchars($data["telp"]);
    $alamat = htmlspecialchars($data["alamat"]);
    

    $query = "INSERT INTO penerbit VALUES ('$id_penerbit', '$nama_penerbit', '$email', '$telp', '$alamat')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function ubah($data){
    global $conn;
    $id_penerbit = $data["id_penerbit"];
    $nama_penerbit = htmlspecialchars($data["nama_penerbit"]);
    $email = htmlspecialchars($data["email"]);
    $telp = htmlspecialchars($data["telp"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $query = "UPDATE penerbit SET
                nama_penerbit = '$nama_penerbit',
                email = '$email',
                telp = '$telp',
                alamat = '$alamat'
                WHERE id_penerbit = '$id_penerbit'
                ";
    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}

function hapus($id_penerbit) {
    global $conn;
    mysqli_query($conn, "DELETE FROM penerbit WHERE id_penerbit='$id_penerbit'") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);


}
?>