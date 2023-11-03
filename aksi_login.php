<?php
include "koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];
$hasil=mysqli_query($koneksi,"select * from register where username = '$username' and password = '$password'");
$row=mysqli_fetch_array($hasil);
if ($row['id']<>"") {
 session_start();
 $_SESSION['id_user']=$row['id'];
 header("location:index(2).php");
}else{
 header("location:login.php?pesan=gagal_login");
}
?>