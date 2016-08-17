<h1>Mencari Bilangan Terkecil - Soal BAB12 No 2</h1>
<?php
$angka = array(283, 182, 381, 119, 391, 591, 123, 124, 284, 215, 312);

$bilterkecil = $angka[0];
echo "Bilangan : <br/>";
foreach ($angka as $key => $value) {
	// Menampilkan bilangan array
	if ($key == count($angka) - 1) {
		echo $value;
	} else {
		echo $value.", ";
	}
	// Kode untuk mencari bilangan terkecil
	if ($value < $bilterkecil) {
		$bilterkecil = $value;
	}
}
echo "<br/> Bilangan terkecil adalah $bilterkecil";
?>