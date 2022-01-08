<?php
    include_once("../connect.php");
    $katalog = mysqli_query($mysqli, "SELECT * FROM katalogs");
?>
 
<html>
<head>    
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
 
<body>
    <div class="container-sm">
        <center>
            <a href="../index.php">Buku</a> |
            <a href="../penerbit/index.php">Penerbit</a> |
            <a href="../pengarang/index.php">Pengarang</a> |
            <a href="index.php">Katalog</a>
            <hr>
        </center>

        <a href="add.php">Add New Katalog</a><br/><br/>
    
        <table class="table table-striped table-hover table-bordered align-middle text-center">
    
        <tr>
            <th>Id Katalog</th>
            <th>Nama Katalog</th> 
            <th>Aksi</th>
        </tr>
        <?php  
            while($katalog_data = mysqli_fetch_array($katalog)) {         
                echo "<tr>";
                echo "<td>".$katalog_data['id']."</td>";
                echo "<td>".$katalog_data['nama']."</td>";      
                echo "<td><a class='btn btn-outline-primary' href='edit.php?id=$katalog_data[id]'>Edit</a> | <a class='btn btn-outline-danger' href='delete.php?id=$katalog_data[id]'>Delete</a></td></tr>";        
            }
        ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>