<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
    <!--<![endif]-->
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if lt IE 9]> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>MATH-TER</title>
    <meta name="description" content="">
    <meta name="author" content="WebThemez">
    <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <!--[if lte IE 8]>
            <script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
        <![endif]-->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link href="css/animate.css" rel="stylesheet" media="screen">
    <!-- Owl Carousel Assets -->
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" />
    <!-- Font Awesome -->
    <link href="font/css/font-awesome.min.css" rel="stylesheet">
    </head>
    
<title>Math-ter Answer</title>
<!-- Sertakan Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.css">
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #f5f5f5;
            color: #333;
            padding: 20px;
            text-align: center;
        }
        nav {
            background-color: #f0d90b;
            text-align: center;
            padding: 10px;
        }
        nav a {
            text-decoration: none;
            color: #bcbe3c;
            margin: 10px;
            font-weight: bold;
        }
        section {
            padding: 40px;
            text-align: center;
        }
        h1 {
            font-size: 36px;
            color: #333;
        }
        p {
            font-size: 18px;
            color: #555;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .button:hover {
            background-color: #555;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
    </style>
</style>
<body>
<header>
        <h1>Math-ter Answer</h1>
    </header>
    <nav>
        Berikut kumpulan-kumpulan pertanyaan yang pernah dikirim, jika punyamu belum dibalas, mohon ditunggu!
    </nav>
<div class="container mt-5">
<?php
// Membuka koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", 
"db_register");
// Memeriksa apakah koneksi berhasil
if (!$koneksi) {
die("Koneksi gagal: " . mysqli_connect_error());
}
// Menampilkan data yang disimpan dalam bentuk tabel
$sql = "SELECT * FROM submit";
$result = mysqli_query($koneksi, $sql);
if (mysqli_num_rows($result) > 0) {
echo "<table class='table table-striped'>";
echo "<thead><tr><th>Nama</th><th>Komentar</th><th>Jawaban</th></tr></thead>";
echo "<tbody>";
while ($row = mysqli_fetch_assoc($result)) {
echo "<tr>";
echo "<td>" . $row["nama"] . "</td>";
echo "<td>" . $row["pertanyaan"] . "</td>";
echo "<td>" . $row["jawaban"] . "</td>";
echo "</tr>";
}
echo "</tbody>";
echo "</table>";
} else {
echo "<h3>Tidak ada data yang tersimpan.</h3>";
}
// Menutup koneksi
mysqli_close($koneksi);
?>
<a href="index.php" class="button">Back</a>
</div>
<br>
<footer>
        &copy; 2023 Math-ter
    </footer>
</body>
</html>