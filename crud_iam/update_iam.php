<?php

//ngegabungin satu file
include '../test1.php';

//$_SERVER['REQUEST_METHOD'] = mendeteksi method url yang dipakai
$method = $_SERVER['REQUEST_METHOD'];

if ($method == "POST") {

    $IAM_id = $_POST['IAM_id'];
    $role_id = $_POST['role_id'];
    $pages = $_POST['pages'];

    $sql = "UPDATE tb_iam 
            SET role_id='$role_id',
                pages='$pages' 
            WHERE IAM_id='$IAM_id'";
    //proses dump data
    // print($sql);
    // die();
    // end:proses dump

    //mulai:update data
    $update = mysqli_query($koneksi, $sql);
    if ($update) {
        echo "Data Berhasil Diubah!";
    } else {
        echo "Gagal mengubah data";
    }
    //end
} else {
    echo "Method tidak dikenali";
}
