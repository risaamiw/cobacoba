<?php

//ngegabungin satu file
include '../test1.php';

//$_SERVER['REQUEST_METHOD'] = mendeteksi method url yang dipakai
$method = $_SERVER['REQUEST_METHOD'];

if ($method == "GET") {
    $sql = "SELECT * FROM tb_iam";
    //proses dump data
    // print($sql);
    // die();
    // end:proses dump

    //mulai:select data
    $select = mysqli_query($koneksi, $sql);
    if ($select) {
        $data = $select->fetch_all();
        echo json_encode($data);
    } else {
        echo "Gagal menampilkan data";
    }
    //end
} else {
    echo "Method tidak dikenali";
}
