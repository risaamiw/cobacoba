<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "risa_azmi";

$koneksi = new mysqli($host, $username, $password, $database);
if ($koneksi->connect_error) {
    echo "Gagal koneksi ke database";
}
