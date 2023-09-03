<?php

include '../test1.php';

$user_id = $_GET['user_id'];
$sql = "DELETE FROM tb_users WHERE user_id='$user_id'";
$hapus = mysqli_query($koneksi, $sql);

if ($hapus) {
    echo "Data berhasil dihapus";
} else {
    echo "Data gagal dihapus";
}
