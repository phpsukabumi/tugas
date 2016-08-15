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
    <h1>Hitung Upah</h1>
    <p>Hasil :</p>
    <?php
    $jamkerja = $_POST['jamkerja'];
    $lembur = 48;
    $upah = 2000;
    $upahlembur = 3000;

    if ($jamkerja < $lembur) {
        echo "Upah yang diterima ".($jamkerja * $upah);
    } else {
        $lebih = $jamkerja - $lembur;
        echo "Upah lembur ".($lebih * $upahlembur)."<br/>";
        echo "Upah kerja ".($lembur * $upah)."<br/>";
        echo "Totalnya adalah ".(($lebih * $upahlembur) + ($lebih * $upahlembur))."<br/>";
    }
    ?>
</div>
</body>
</html>