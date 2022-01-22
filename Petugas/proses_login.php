<?php
  session_start(); // mengaktifkan session pada php
  include 'koneksi.php'; // menghubungkan php dengan koneksi database
  $username = $_POST['username']; 
  $password = $_POST['password']; //menangkap data yang dikirimkan dari form login

  $login = mysqli_query($koneksi,"select * from petugas where username='$username' and password='$password'");
  //menyeleksi data user dengan username dan password yang sesuai
  
  $cek = mysqli_num_rows($login); // menghitung jumlah data yang ditemukan

  if($cek > 0){ // cek apakah username dan password ditemukan pada database
    $data = mysqli_fetch_assoc($login);
    if($data['level']=="admin"){ //cek jika user login sebagai admin
        $_SESSION['level'] = "admin";
        $_SESSION['status_login']=true;
        echo "<script>alert('login berhasil');location.href='tampil_barang.php';</script>";
    }else if($data['level']=="petugas"){
        $_SESSION['level'] = "petugas";
        $_SESSION['status_login']=true;
        echo "<script>alert('login berhasil');location.href='petugas_page.php';</script>";
    }
}else {
    echo "<script>alert('login gagal');location.href='login.php';</script>";
}
?>