<?php
    include_once("../connect.php");
    $penerbit = mysqli_query($mysqli, "SELECT * FROM penerbits");
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
            <a href="index.php">Penerbit</a> |
            <a href="../pengarang/index.php">Pengarang</a> |
            <a href="../katalog/index.php">Katalog</a>
            <hr>
        </center>

        <a href="add.php">Add New Penerbit</a><br/><br/>
    
        <table class="table table-striped table-hover table-bordered align-middle text-center">
    
        <tr>
            <th>Nama Penerbit</th> 
            <th>Email</th> 
            <th>Telpon</th> 
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php  
            while($penerbit_data = mysqli_fetch_array($penerbit)) {         
                echo "<tr>";
                echo "<td>".$penerbit_data['nama_penerbit']."</td>";
                echo "<td>".$penerbit_data['email']."</td>";
                echo "<td>".$penerbit_data['telp']."</td>";    
                echo "<td>".$penerbit_data['alamat']."</td>";       
                echo "<td><a class='btn btn-outline-primary' href='edit.php?nama_penerbit=$penerbit_data[nama_penerbit]'>Edit</a> | <a class='btn btn-outline-danger' href='delete.php?nama_penerbit=$penerbit_data[nama_penerbit]'>Delete</a></td></tr>";        
            }
        ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>