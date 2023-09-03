<?php

//ngegabungin satu file
include '../test1.php';

//$_SERVER['REQUEST_METHOD'] = mendeteksi method url yang dipakai
$method = $_SERVER['REQUEST_METHOD'];

if ($method == "POST") {
    $IAM_id = $_POST['IAM_id'];

    $string = implode(", ", $IAM_id);

    $sql = "DELETE FROM tb_iam WHERE IAM_id IN ($string)";

    // proses dump data
    // print($sql);
    // die();
    // end:proses dump

    //mulai:delete data
    $delete = mysqli_query($koneksi, $sql);
    if ($delete) {
        echo "Data Berhasil Di hapus!";
    } else {
        echo "Gagal menghapus data";
    }
    //end
} else {
    echo "Method tidak dikenali";
}
