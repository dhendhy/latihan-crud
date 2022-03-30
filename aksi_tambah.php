<?php
    include 'koneksi.php';

    $kode =$_POST['kode'];
    $judul= $_POST['judul'];
    $pengarang= $_POST["pengarang"];
    $penerbit= $_POST['penerbit'];
    $tahun= $_POST['tahun'];

        $query = "INSERT INTO perpustakaan6 values(NULL,'$id','$kode','$judul','$pengarang','$penerbit','$tahun')";
        mysqli_query($conn,$query);

        header('location:index.php');
        ?>