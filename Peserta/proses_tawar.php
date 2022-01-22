<?php
    session_start();
    include "koneksi.php";
    $id_barang = $_POST['id_barang'];
    // echo $id_barang;
    $harga_tawar = $_POST['harga_tawar'] * 10000000;
    $harga = $_POST['harga'] + $harga_tawar;
        $query_pinjam = mysqli_query($koneksi, "INSERT INTO lelang (id_barang, tgl_lelang, harga, id_peserta)
        VALUES ('".$id_barang."', '".date('Y-m-d')."', '".$harga."', '".$_SESSION['id_peserta']."' )");
        mysqli_query($koneksi,"UPDATE barang SET harga = '".$harga."', id_pemenang = '".$_SESSION['id_peserta']."' WHERE id_barang = '".$id_barang."'");
        if ($query_pinjam) {
            echo "<script>alert('Anda Berhasil Menawar');location.href='lihat_barang.php?id_barang=$id_barang'</script>";
        }
        else{
            echo "<script>alert('Gagal Menawar');location.href='lihat_barang.php'</script>";
            // echo mysqli_error($koneksi);
        }
    
?>