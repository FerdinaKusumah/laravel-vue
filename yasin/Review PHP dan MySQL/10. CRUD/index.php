<?php
    include_once("connect.php");
    $buku = mysqli_query($mysqli, "SELECT bukus.*, nama_pengarang, nama_penerbit, katalogs.nama as nama_katalog FROM bukus 
                                        LEFT JOIN  pengarangs ON pengarangs.id = bukus.id_pengarang
                                        LEFT JOIN  penerbits ON penerbits.id = bukus.id_penerbit
                                        LEFT JOIN  katalogs ON katalogs.id = bukus.id_katalog
                                        ORDER BY judul ASC");
?>
 
<html>
<head>    
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
</head>
 
<body>
    <div class="container-md">
        <center>
            <a href="index.php">Buku</a> |
            <a href="penerbit/index.php">Penerbit</a> |
            <a href="pengarang/index.php">Pengarang</a> |
            <a href="katalog/index.php">Katalog</a>
            <hr>
        </center>

        <a href="add.php">Add New Buku</a><br/><br/>
    
        <table class="table table-striped table-hover table-bordered align-middle text-center">
    
        <tr>
            <th>ISBN</th> 
            <th>Judul</th> 
            <th>Tahun</th> 
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Katalog</th>
            <th>Stok</th>
            <th>Harga Pinjam</th>
            <th>Aksi</th>
        </tr>
        <?php  
            while($buku_data = mysqli_fetch_array($buku)) {         
                echo "<tr>";
                echo "<td>".$buku_data['isbn']."</td>";
                echo "<td>".$buku_data['judul']."</td>";
                echo "<td>".$buku_data['tahun']."</td>";    
                echo "<td>".$buku_data['nama_pengarang']."</td>";    
                echo "<td>".$buku_data['nama_penerbit']."</td>";    
                echo "<td>".$buku_data['nama_katalog']."</td>";    
                echo "<td>".$buku_data['qty_stok']."</td>";    
                echo "<td>".$buku_data['harga_pinjam']."</td>";    
                echo "<td><a class='btn btn-outline-primary' href='edit.php?isbn=$buku_data[isbn]'>Edit</a> | <a class='btn btn-outline-danger' href='delete.php?isbn=$buku_data[isbn]'>Delete</a></td></tr>";        
            }
        ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>