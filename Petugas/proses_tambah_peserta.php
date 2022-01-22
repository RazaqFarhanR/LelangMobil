<?php

    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $tlp=$_POST['tlp'];

    include "koneksi.php";
    $input = mysqli_query($koneksi, "INSERT INTO peserta (nama, username, password, tlp) VALUES ('{$nama}', '{$username}', '".md5($password)."', '{$tlp}')");

    if ($input) {
        echo "<script>alert('BERHASIL');location.href='tampil_peserta.php';</script>";
    }
    else{
        echo "<script>alert('gagal');location.href='tambah_peserta.php';</script>";
    }
?>