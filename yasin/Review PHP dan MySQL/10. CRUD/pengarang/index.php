<?php
    include_once("../connect.php");
    $pengarang = mysqli_query($mysqli, "SELECT * FROM pengarangs");
?>
 
<html>
<head>    
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
 
<body>
    <div class="container-md">
        <center>
        <a href="../index.php">Buku</a> |
        <a href="../penerbit/index.php">Penerbit</a> |
        <a href="index.php">Pengarang</a> |
        <a href="../katalog/index.php">Katalog</a>
        <hr>
        </center>

        <a href="add.php">Add New pengarang</a><br/><br/>
 
        <table class="table table-striped table-hover table-bordered align-middle text-center">
 
        <tr>
            <th>Nama pengarang</th> 
            <th>Email</th> 
            <th>Telpon</th> 
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php  
            while($pengarang_data = mysqli_fetch_array($pengarang)) {         
                echo "<tr>";
                echo "<td>".$pengarang_data['nama_pengarang']."</td>";
                echo "<td>".$pengarang_data['email']."</td>";
                echo "<td>".$pengarang_data['telp']."</td>";    
                echo "<td>".$pengarang_data['alamat']."</td>";       
                echo "<td><a class='btn btn-outline-primary' href='edit.php?nama_pengarang=$pengarang_data[nama_pengarang]'>Edit</a> | <a class='btn btn-outline-danger' href='delete.php?nama_pengarang=$pengarang_data[nama_pengarang]'>Delete</a></td></tr>";        
            }
        ?>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>