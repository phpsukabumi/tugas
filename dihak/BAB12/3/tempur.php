<h1>Mencari nilai terbesar dan terkecil - Soal BAB12 No 3</h1>
<?php
$jumlah = $_POST['jumlah'];
$angka = array();
for ($i=0; $i < $jumlah; $i++) { 
	$angka[] = $_POST['data'.$i];
}
echo "Bilangan : <br/>";
$terbesar = $angka[0];
$terkecil = $angka[0];
foreach ($angka as $key => $value) {
	// Menampilkan bilangan array
	if ($key == count($angka) - 1) {
		echo $value."<br/>";
	} else {
		echo $value.", ";
	}
	// Mencari bilangan terbesar dan terkecil
	if ($value < $terkecil) {
		$terkecil = $value;
	} elseif ($value > $terbesar) {
		$terbesar = $value;
	}
}
echo "<br/>Bilangan terkecil = ".$terkecil;
echo "<br/>Bilangan terbesar = ".$terbesar;
$selisih = $terbesar - $terkecil;
echo "<br/><br/>Selisih bilangan terbesar dan terkecil adalah ".$selisih;
?>