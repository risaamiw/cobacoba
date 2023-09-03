<?php

//ngegabungin satu file
include '../test1.php';

//$_SERVER['REQUEST_METHOD'] = mendeteksi method url yang dipakai
$method = $_SERVER['REQUEST_METHOD'];

if ($method == "GET") {
    $role_id = $_GET['role_id'];

    $sql = "SELECT * FROM tb_role WHERE role_id = '$role_id'";
    //proses dump data
    // print($sql);
    // die();
    // end:proses dump

    //mulai:select data
    $select = mysqli_query($koneksi, $sql);
    if ($select) {
        $data = $select->fetch_assoc();
        echo json_encode($data);
    } else {
        echo "Gagal menampilkan data role";
    }
    //end
} else {
    echo "Method tidak dikenali";
}
