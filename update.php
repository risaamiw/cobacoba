<?php

include('test1.php');

$user_id = $_POST['user_id'];
$name = $_POST['name'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Mengenkripsi kata sandi
$role_id = $_POST["role_id"];

$query = "UPDATE tb_users SET name='$name', username='$username', password='$password', role_id='$role_id' WHERE user_id='$user_id'";
$result = $koneksi->query($query);

if ($result) {
    echo "Data pengguna berhasil dperbarui";
} else {
    echo "Gagal memperbarui data pengguna";
}
