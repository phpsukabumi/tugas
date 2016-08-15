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
    <h1>Menghitung Saldo</h1>
    <p>Hasil :</p>
    <?php
    $saldo = $_POST['saldo'];
    $bulan = $_POST['bulan'];
    $administrasi = 9000;
    for ($i=1; $i <= $bulan; $i++) {
        if ($saldo < 1100000) {
            $bunga = 0.03; // 0,03 adalah 3%
        } else {
            $bunga = 0.04;
        } 
        $saldo = ($saldo + ($saldo * $bunga)) - $administrasi;
        echo "Saldo bulan ke-".$i." adalah ".$saldo."<br/>";
    }
    ?>
</div>
</body>
</html>