<!DOCTYPE html>
<html>
<head>
	<title>Tugas 3</title>
<style type="text/css">
body {
    background: #0095ff;
}
#content {
    width: 500px;
    background: rgba(255, 255, 255, 0.5);
    margin: auto;
    margin-top: 20px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.49);
    padding: 20px;
    text-align: center;
}

form input {
    display: block;
    margin: auto;
    margin-bottom: 10px;
    padding: 10px;
    width: 200px;
}

input[type="submit"] {
    background: #0095ff;
    color: #Fff;
    border: none;
    cursor: pointer;
}
</style>
</head>
<body>
<div id="content">
	<h1>Menghitung Banyaknya Uang Pecahan</h1>
	<p>Hasil :</p>
    <?php
    $jumlahUang = $_POST['bilangan'];
    echo "Banyak uang pecahan dari ".$jumlahUang."<br />";
    $a = ($jumlahUang - $jumlahUang % 100000) / 100000;
    $jumlahUang = $jumlahUang % 100000;
    $b = ($jumlahUang - $jumlahUang % 50000) / 50000;
    $jumlahUang = $jumlahUang % 50000;
    $c = ($jumlahUang - $jumlahUang % 20000) / 20000;
    $jumlahUang = $jumlahUang % 20000;
    $d = ($jumlahUang - $jumlahUang % 5000) / 5000;
    $jumlahUang = $jumlahUang % 5000;
    $e = ($jumlahUang - $jumlahUang % 100) / 100;
    $jumlahUang = $jumlahUang % 100;
    $f = ($jumlahUang - $jumlahUang % 50) / 50;
    echo "Jumlah Rp. 100.000 : ".$a. "<br />";
    echo "Jumlah Rp. 50.000 : ".$b. "<br />";
    echo "Jumlah Rp. 20.000 : ".$c. "<br />";
    echo "Jumlah Rp. 5.000 : ".$d. "<br />";
    echo "Jumlah Rp. 100 : ".$e. "<br />";
    echo "Jumlah Rp. 50 : ".$f. "<br />";
    ?>
</div>
</body>
</html>