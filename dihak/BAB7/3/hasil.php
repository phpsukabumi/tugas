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
    <h1>Apakah Berat Badan Anda Ideal</h1>
    <p>Hasil :</p>
    <?php
    $tinggi = $_POST['tinggi'];
    $berat = $_POST['berat'];
    $ideal = ($tinggi - 100) - (($tinggi - 100) / 10); // Rumus ideal : tinggi badan – 100, lalu hasilnya dikurangi lagi dengan 10% dari hasil pengurangan pertama.
    if ($berat - $ideal < 2) { // Jika selisih berat dengan ideal kurang dari 2
        echo "Berat badan Anda ideal";
    } else { // Jika tidak
        echo "Berat badan Anda tidak ideal";
    }
    ?>
</div>
</body>
</html>