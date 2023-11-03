<?php
include "koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];
$hasil=mysqli_query($koneksi,"select * from register where username = '$username' and password = '$password'");
$row=mysqli_fetch_array($hasil);
if ($row['id']<>"") 
 session_start();
 session_start();
 session_destroy();
 header("location:index.php?pesan=logout")
?>