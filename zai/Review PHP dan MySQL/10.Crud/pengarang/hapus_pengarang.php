<?php 
require 'function_pengarang.php';

$id_pengarang = $_GET['id_pengarang'];

if(hapus($id_pengarang) > 0 ) {
    echo "
    <script>
        alert('data berhasil dihapus!');
        document.location.href = 'pengarang.php';
    </script>
";
} else {
    echo "
    <script>
        alert('data gagal dihapus!');
        document.location.href = 'pengarang.php';
    </script>
";
}

?>