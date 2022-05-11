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
    $id_katalog = htmlspecialchars($data["id_katalog"]);
    $nama_katalog = htmlspecialchars($data["nama"]);
    
    

    $query = "INSERT INTO katalog VALUES ('$id_katalog', '$nama_katalog')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function ubah($data){
    global $conn;
    $id_katalog = $data["id_katalog"];
    $nama_katalog = htmlspecialchars($data["nama"]);

    $query = "UPDATE katalog SET
                nama = '$nama_katalog'
                WHERE id_katalog = '$id_katalog'
                ";
    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}

function hapus($id_katalog) {
    global $conn;
    mysqli_query($conn, "DELETE FROM katalog WHERE id_katalog ='$id_katalog'") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);


}
?>