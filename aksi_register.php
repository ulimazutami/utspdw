<?php
// Membuka koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_register");

// Memeriksa apakah koneksi berhasil
if (!$koneksi) {
die("Koneksi gagal: " . mysqli_connect_error());
}

// Memeriksa apakah formulir telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm = $_POST["confirm"];


// Menyisipkan data ke dalam tabel pendaftaran
$sql = "INSERT INTO register (username, email, password, confirm) VALUES ('$username', '$email', '$password','$confirm')";
$run = mysqli_query($koneksi, $sql);

if ($sql==TRUE){
echo "<h2>Berhasil membuat akun baru!</h2>";
header("location:login.php");
exit();
}

}

?>