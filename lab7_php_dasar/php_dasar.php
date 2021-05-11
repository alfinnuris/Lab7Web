<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
        echo "Hello World";
    ?>
    <h2>Menggunakan Variable</h2>
 		<?php
		$nim = "311910738";
		$nama = "Alfin Nuris Setiadi";
		echo "NIM : " . $nim . "<br>";
		echo "Nama : $nama";
		?>
        <?php
    echo 'Selamat Datang ' . $_GET['nama'];
?>
</body>
</html>