<?php

$server = 'localhost';
$database ='perpustakaan6';
$username = 'root';
$password = '';

$conn = mysqli_connect($server,$username,$password,$database);
if(mysqli_connect_errno()){
    echo 'koneksi gagal :'.mysqli_connect_error();
}
?>