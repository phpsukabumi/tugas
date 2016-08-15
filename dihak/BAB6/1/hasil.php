<!DOCTYPE html>
<html>
<head>
	<title>Tugas 1</title>
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
	<h1>Menghitung Saldo</h1>
	<p>Hasil :</p>
    <?php
	echo "Saldo awal = ".$_POST['saldo']."<br/>";
	echo "Bunga = ".$_POST['bunga']." perbulan <br/>";
	echo "Bulan = ".$_POST['bulan']." bulan <br/>";
	echo "Saldo akhir setelah ".$_POST['bulan']." bulan adalah ".($_POST['saldo'] + ($_POST['saldo'] * $_POST['bunga'] * $_POST['bulan']))."<br/>";
	?>
</div>
</body>
</html>