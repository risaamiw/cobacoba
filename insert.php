<?php

include('test1.php');

$name = $_POST['name'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Mengenkripsi kata sandi
$role_id = $_POST['role_id'];

$sql = "INSERT INTO tb_users (name, username, password, role_id) VALUES ('$name', '$username', '$password', '$role_id')";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil dimasukkan";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
