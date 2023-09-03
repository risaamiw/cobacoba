<?php

//ngegabungin satu file
include '../test1.php';

//$_SERVER['REQUEST_METHOD'] = mendeteksi method url yang dipakai
$method = $_SERVER['REQUEST_METHOD'];

if ($method == "GET") {
    $IAM_id = $_GET['IAM_id'];

    $sql = "SELECT * FROM tb_iam WHERE IAM_id = '$IAM_id'";
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
        echo "Gagal menampilkan data";
    }
    //end
} else {
    echo "Method tidak dikenali";
}
