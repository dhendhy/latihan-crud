<?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $query = "DELETE FROM perpustakaan6 where id = $id";
    mysqli_query($conn,$query);

    header('location: index.php');
    ?>