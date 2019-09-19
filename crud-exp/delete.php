<?php
require "./function/funciton.php";
$id = $_GET['id'];

if (delete($id) > 0) {
    echo "<script>
        alert('data berhasil di hapus');
        document.location.href='index.php';
    </script>";
} else {
    echo "
    <script>
        alert('Gagal dihapus');
        document.location.href='index.php';
    </script>
    ";
}
