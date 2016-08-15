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
	<?php
	$bangundatar = $_POST['bangundatar'];
	echo "<h1>Hitung Luas Bangun Datar</h1><p>Isikan form dibawah ini :</p><form method='post' action='hasil.php'>";
	echo "<input type='hidden' name='bangundatar' value='$bangundatar'></input>";
	switch ($bangundatar) {
		case 'bujursangkar':
			echo '<input type="text" placeholder="Masukan panjang sisi" name="sisi"></input>';
			break;
		case 'persegipanjang':
			echo '<input type="text" placeholder="Masukan panjang" name="panjang"></input>';
			echo '<input type="text" placeholder="Masukan tinggi" name="tinggi"></input>';
			break;
		case 'lingkaran':
			echo '<input type="text" placeholder="Masukan panjang jari jari" name="jari"></input>';
			break;
		case 'segitiga':
			echo '<input type="text" placeholder="Masukan panjang" name="panjang"></input>';
			echo '<input type="text" placeholder="Masukan tinggi" name="tinggi"></input>';
			break;
	}
	echo '<input type="submit" name="submit" value="submit"></input></form>';
	?>
</div>
</body>
</html>