<?php 
require 'function_buku.php';

$isbn = $_GET['isbn'];

if(hapus($isbn) > 0 ) {
    echo "
    <script>
        alert('data berhasil dihapus!');
        document.location.href = 'buku.php';
    </script>
";
} else {
    echo "
    <script>
        alert('data gagal dihapus!');
        document.location.href = 'buku.php';
    </script>
";
}

?>