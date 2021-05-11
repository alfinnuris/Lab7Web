<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="UTF-8">
	 <link rel="stylesheet" type="text/css" href="style.css">
 	 <title>Tugas PHP Dasar</title>
</head>
<body>
	<div class="login">
    <h1>Progam sederhana</h1>
    <form method="post">
        <label>Nama : <br></label>
        <input type="text" name="nama" placeholder="Masukan nama">
        <br>
        <label>Tanggal Lahir : <br></label>
        <input type="date" name="tanggal">
        <br>
        <label>Pekerjaan : <br></label>
        <input type="radio" name="pekerjaan" value="Data Scientist">Data Scientist</input>
        <input type="radio" name="pekerjaan" value="Game Creator">Game Creator</input>
        <input type="radio" name="pekerjaan" value="Web Desainer">Web Desainer</input>
        <input type="radio" name="pekerjaan" value="Android Developer">Android Developer</input>
        <input type="radio" name="pekerjaan" value="Application Engineer">Application Engineer</input>
        <br>
        <br>
        <input type="submit" name="button" value="Submit">
        <br>
        <br>
        <h3>Hasil Outputnya : </h3>

    <?php
    $lahir = @$_GET['tanggal'];
    $button = @$_POST['button'];

    if ($button) {
        $nama=$_POST['nama'];
        $job=@$_POST['pekerjaan'];
        echo "<p>Nama : $nama</p>";
        $tanggal_lahir = new DateTime($_POST['tanggal']);
        $sekarang = new DateTime("today");
        if ($tanggal_lahir > $sekarang) { 
            $thn = "0";
            $bln = "0";
            $tgl = "0";
        }
        $thn = $sekarang->diff($tanggal_lahir)->y;
        $bln = $sekarang->diff($tanggal_lahir)->m;
        $tgl = $sekarang->diff($tanggal_lahir)->d;
        echo "<p>Umur : ";
        echo $thn." Tahun ".$bln." Bulan ".$tgl." Hari";
         
        if ($job=='Data Scientist') {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gajinya : Rp. 9.045.000/bulan</p>";
        }
        elseif ($job=="Game Creator") {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gajinya : Rp. 7.654.000/bulan</p>";
        }
        elseif ($job=="Web Desainer") {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gajinya : Rp. 6.600.000/bulan</p>";
        }
        elseif ($job=="Android Developer") {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gajinya : Rp. 7.984.000/bulan</p>";
        }
        elseif ($job=="Application Engineer") {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gajinya : Rp. 10.456.000/bulan</p>";
        }
        else {
            echo "<p>Pilih pekerjaan</p>";
        }
        echo "<br><br><p>&copy;" . date("Y") . " Alfin Nuris Setiadi - 311910738</p>";
    }
    ?>
    </form>
</body>
</html>
© 2021 AlfinNuris_github.com