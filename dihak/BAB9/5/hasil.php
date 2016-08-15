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
    <h1>Hitung Jumlah Penyelesain Dengan 3 Bilangan</h1>
    <p>Hasil :</p>
    <?php
    $hasil = $_POST['bil']; // Hasilnya harus 25
    $jumlahpenyelesain = 0;
    for ($x=$hasil - 2; $x > 0; $x--) { 
        for ($i=1; $i < $hasil - $x; $i++) { 
            $y = $i;
            $z = ($hasil - $i - $x);
            $jumlahpenyelesain ++;
            echo $y." + ".$z." + ".$x." = ".$hasil."<br/>";
        }
    }
    echo "Jumlah Penyelesaian = ".$jumlahpenyelesain;
    ?>
</div>
</body>
</html>