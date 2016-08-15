<!DOCTYPE html>
<html>
<head>
    <title>Tugas 6</title>
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
    <h1>Hitung Upah Yang Didapat</h1>
    <p>Hasil :</p>
    <?php
    $jamkerja = $_POST['jamkerja'];
    $golongan = $_POST['golongan'];

    $lembur = 48;
    $upahlembur = 3000;
    if ($golongan == 'A') {
        $upah = 4000;
    } elseif ($golongan == 'B') {
        $upah = 5000;
    } elseif ($golongan == 'C') {
        $upah = 6000;
    } else {
        $upah = 7500;
    }
    if ($jamkerja < $lembur) {
        echo "Upah yang diterima ".($jamkerja * $upah);
    } else {
        $jamlembur = $jamkerja - $lembur;
        $jamkerja = $jamkerja - $jamlembur;
        echo "Upah yang diterima ".($jamkerja * $upah)." ditambah ".($jamlembur * $upahlembur)." sama dengan ".(($jamkerja * $upah) + ($jamlembur * $upahlembur));
    }
    ?>
</div>
</body>
</html>