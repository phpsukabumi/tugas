<!DOCTYPE html>
<html>
<head>
	<title>Tugas 5</title>
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
	<h1>Hitung Luas Bangun Datar</h1>
	<p>Hasil :</p>
	<?php
	$bangundatar = $_POST['bangundatar'];
	switch ($bangundatar) {
		case 'bujursangkar':
			$hasil = $_POST['sisi'] * $_POST['sisi'];
			break;
		case 'persegipanjang':
			$hasil = $_POST['panjang'] * $_POST['tinggi'];
			break;
		case 'lingkaran':
			$hasil = $_POST['jari'] * $_POST['jari'] * 3.14;
			break;
		case 'segitiga':
			$hasil = $_POST['panjang'] * $_POST['tinggi'] / 2;
			break;
	}
	echo $hasil;
	?>
</div>
</body>
</html>