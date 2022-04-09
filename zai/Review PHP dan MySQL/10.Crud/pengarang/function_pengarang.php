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
    $id_pengarang = htmlspecialchars($data["id_pengarang"]);
    $nama_pengarang = htmlspecialchars($data["nama_pengarang"]);
    $email = htmlspecialchars($data["email"]);
    $telp = htmlspecialchars($data["telp"]);
    $alamat = htmlspecialchars($data["alamat"]);
    

    $query = "INSERT INTO pengarang VALUES ('$id_pengarang', '$nama_pengarang', '$email', '$telp', '$alamat')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function ubah($data){
    global $conn;
    $id_pengarang = $data["id_pengarang"];
    $nama_pengarang = htmlspecialchars($data["nama_pengarang"]);
    $email = htmlspecialchars($data["email"]);
    $telp = htmlspecialchars($data["telp"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $query = "UPDATE pengarang SET
                nama_pengarang = '$nama_pengarang',
                email = '$email',
                telp = '$telp',
                alamat = '$alamat'
                WHERE id_pengarang = '$id_pengarang'
                ";
    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}

function hapus($id_pengarang) {
    global $conn;
    mysqli_query($conn, "DELETE FROM pengarang WHERE id_pengarang ='$id_pengarang'") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);


}
?>