<?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $query = "SELECT * FROM perpustakaan6 where id = $id";
    $data = mysqli_query($conn,$query);

    $tampil = mysqli_fetch_assoc($data);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>tambah data </title>
    </head>
    <body>
        <from action="aksi_tambah.php" method="post">
        <input hiden type="text"name="id=" value="<?= $id ?>">
            <label for="id">id</label>
             <input type="text"name="id" id="id" value="<?=$tampil ['id']?>"><br><br>
             <label for="nama">kode</label>
             <input type="text"name="kode" id="kode" value="<?=$tampil ['kode']?>"><br><br>
             <label for="kelas">judul</label>
             <input type="text"name="judul" id="judul" value="<?=$tampil ['judul']?>"><br><br>
             <label for="semester">pengarang</label>
             <input type="text"name="pengarang"id="pengarang"  value="<?=$tampil ['pengarang']?>"><br><br>
             <label for="studi">penerbit</label>
             <input type="text"name="penerbit"id="penerbit"  value="<?=$tampil ['penerbit']?>"><br><br>
             <label for="alamat">tahun</label>
             <input type="text"name="tahun"id="tahun"  value="<?=$tampil ['tahun']?>"><br><br>
             <button type="submit">simpan</button>
             </from>
             </body>
             </html>
 