<?php

//ngegabungin satu file
include '../test1.php';

//$_SERVER['REQUEST_METHOD'] = mendeteksi method url yang dipakai
$method = $_SERVER['REQUEST_METHOD'];

if ($method == "POST") {
    $pages = $_POST['pages'];

    $sql = "INSERT INTO tb_iam (pages) VALUES ('$pages')";
    // proses dump data
    // print($sql);
    // die();
    // end:proses dump

    //mulai:insert data
    $insert = mysqli_query($koneksi, $sql);
    if ($insert) {
        echo "Data Berhasil Ditambahkan!";
    } else {
        echo "Gagal menambahkan data";
    }
    //end
} else {
    echo "Method tidak dikenali";
}
