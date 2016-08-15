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
    <h1>Anak Ayam Turun</h1>
    <p>Hasil :</p>
    <?php
    $anakayam = $_POST['anakayam']; // Sebanyak banyaknya ayam, mereka akan mati satu persatu #baper
    for ($i=0; $anakayam > $i; $anakayam--) {
        if ($anakayam == 1) { // Kalau anak ayam tinggal satu
            echo "Anak ayam turun satu, mati satu tinggal induknya";
        } else { // Kalau masih banyak
            echo "Anak ayam turun ".$anakayam.", mati satu tinggal ".($anakayam - 1)."<br/>";
        }
    }
    ?>
</div>
</body>
</html>