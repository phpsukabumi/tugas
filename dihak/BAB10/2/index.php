<h1>Anak Ayam - Soal BAB10 No 2</h1>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$anakayam = $_POST['anakayam']; // Sebanyak banyaknya ayam, mereka akan mati satu persatu #baper
while ($anakayam > 0) {
    if ($anakayam == 1) { // Kalau anak ayam tinggal satu
        echo "Anak ayam turun satu, mati satu tinggal induknya";
    } else { // Kalau masih banyak
        echo "Anak ayam turun ".$anakayam.", mati satu tinggal ".($anakayam - 1)."<br/>";
    }
    $anakayam--;
}
} else {
	echo '<form method="post" action=""><input type="text" name="anakayam" placeholder="Masukan anak ayam"></input><input type="submit" name="submit"></input></form>';
}
?>