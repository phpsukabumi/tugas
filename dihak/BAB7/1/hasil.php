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
    <h1>Tahun Kabisat Checker</h1>
    <p>Hasil :</p>
    <?php
    $tahun = $_POST['tahun'];
    if ($tahun % 400 === 0) { // Jika tahun dibagi 400 tidak ada sisa, berarti tahun kabisat
        echo "Tahun ".$tahun." adalah tahun kabisat";
    } else if ($tahun % 100 === 0) { // Jika angka tahun itu tidak habis dibagi 400 tetapi habis dibagi 100
        echo "Tahun ".$tahun." bukan tahun kabisat";
    } else if ($tahun % 4 === 0) { // Jika angka tahun itu tidak habis dibagi 400, tidak habis dibagi 100 akan tetapi habis dibagi 4
        echo "Tahun ".$tahun." adalah tahun kabisat";
    } else {
        echo "Tahun ".$tahun." bukan tahun kabisat";
    }
    ?>
</div>
</body>
</html>