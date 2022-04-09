<?php 
require 'function_penerbit.php';

$id_penerbit = $_GET['id_penerbit'];

if(hapus($id_penerbit) > 0 ) {
    echo "
    <script>
        alert('data berhasil dihapus!');
        document.location.href = 'penerbit.php';
    </script>
";
} else {
    echo "
    <script>
        alert('data gagal dihapus!');
        document.location.href = 'penerbit.php';
    </script>
";
}

?>