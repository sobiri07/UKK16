<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "UKK16";

$koneksi = mysqli_connect($hostname, $username, $password, $database);

if (!$koneksi) {
     echo "koneksi Gagal";
}
