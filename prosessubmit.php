<?php
// Membuka koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_register");

// Memeriksa apakah koneksi berhasil
if (!$koneksi) {
die("Koneksi gagal: " . mysqli_connect_error());
}

// Memeriksa apakah formulir telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nama = $_POST["nama"];
$email = $_POST["email"];
$pertanyaan = isset($_POST["pertanyaan"]) ? $_POST["pertanyaan"] : '';


// Menyisipkan data ke dalam tabel pendaftaran
$sql = "INSERT INTO submit (nama, email, pertanyaan) VALUES ('$nama', '$email', '$pertanyaan')";
$run = mysqli_query($koneksi, $sql);

if ($sql==TRUE){
echo "<h2>Terimakasih sudah bertanya!</h2>";
header("location:viewsubmit.php");
exit();
}

}

?>