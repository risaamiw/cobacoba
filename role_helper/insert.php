<?php

//ngegabungin satu file
include '../test1.php';

//$_SERVER['REQUEST_METHOD'] = mendeteksi method url yang dipakai
$method = $_SERVER['REQUEST_METHOD'];

if ($method == "POST") {
    $name = $_POST['name'];

    $sql = "INSERT INTO tb_role (name) VALUES ('$name')";
    //proses dump data
    // print($sql);
    // die();
    // end:proses dump

    //mulai:insert data
    $insert = mysqli_query($koneksi, $sql);
    if ($insert) {
        echo "Role Berhasil Ditambahkan!";
    } else {
        echo "Gagal menambahkan role";
    }
    //end
} else {
    echo "Method tidak dikenali";
}
