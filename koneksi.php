<?php
$koneksi=mysqli_connect("localhost","root","","db_register");
mysqli_select_db($koneksi,"db_register") or die("Gagal Terhubung ke database!");
?>