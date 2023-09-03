<?php

include('test1.php');

$sql = "SELECT name, username, role_id FROM tb_users";
$result = mysqli_query($koneksi, $sql);

if ($result) {
    //mengubah format ke json
    echo json_encode($result->fetch_array());
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
