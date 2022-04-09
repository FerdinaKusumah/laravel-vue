<?php 
require 'function_katalog.php';

$id_katalog = $_GET['id_katalog'];

if(hapus($id_katalog) > 0 ) {
    echo "
    <script>
        alert('data berhasil dihapus!');
        document.location.href = 'katalog.php';
    </script>
";
} else {
    echo "
    <script>
        alert('data gagal dihapus!');
        document.location.href = 'katalog.php';
    </script>
";
}

?>