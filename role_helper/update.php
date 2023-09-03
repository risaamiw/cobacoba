<?php

//ngegabungin satu file
include '../test1.php';

//$_SERVER['REQUEST_METHOD'] = mendeteksi method url yang dipakai
$method = $_SERVER['REQUEST_METHOD'];

if ($method == "POST") {
    $role_id = $_POST['role_id'];
    $name = $_POST['name'];

    $sql = "UPDATE tb_role SET name='$name' WHERE role_id='$role_id'";
    //proses dump data
    // print($sql);
    // die();
    // end:proses dump

    //mulai:update data
    $update = mysqli_query($koneksi, $sql);
    if ($update) {
        echo "Role Berhasil Diubah!";
    } else {
        echo "Gagal mengubah role";
    }
    //end
} else {
    echo "Method tidak dikenali";
}
