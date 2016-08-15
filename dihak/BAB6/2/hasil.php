<!DOCTYPE html>
<html>
<head>
	<title>Tugas 2</title>
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
	<h1>Menghitung Hasil Dari Pembagian + Sisanya</h1>
	<p>Hasil :</p>
    <?php
    $bilangan = $_POST['bilangan'];
    $pembagi = $_POST['pembagi'];
    $sisaBagi = $bilangan % $pembagi;
    $hasilBagi = ($bilangan - $sisaBagi) / $pembagi;
    echo "Bilangan = ".$bilangan."<br/>";
    echo "Pembagi = ".$pembagi."<br/>";
    echo $bilangan." dibagi dengan ".$pembagi. " adalah ".$hasilBagi." sisa ".$sisaBagi;
    ?>
</div>
</body>
</html>