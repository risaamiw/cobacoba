<?php

//ngegabungin satu file
include '../test1.php';

//$_SERVER['REQUEST_METHOD'] = mendeteksi method url yang dipakai
$method = $_SERVER['REQUEST_METHOD'];

if ($method == "POST") {
    $role_id = $_POST['role_id'];

    $sql = "DELETE FROM tb_role WHERE role_id='$role_id'";
    //proses dump data
    // print($sql);
    // die();
    // end:proses dump

    //mulai:delete data
    $delete = mysqli_query($koneksi, $sql);
    if ($delete) {
        echo "Role Berhasil Di hapus!";
    } else {
        echo "Gagal menghapus role";
    }
    //end
} else {
    echo "Method tidak dikenali";
}
