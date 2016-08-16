<h1>Perkalian dari 1 s/d 10 - Soal BAB10 No 4</h1>
<?php
$perkalian = 10;
$kiri = 1;
while ($kiri <= $perkalian) {
	$kanan = 1;
	while ($kanan <= $perkalian) {
		$hasil = $kiri * $kanan;
        echo $kiri." x ".$kanan." = ".$hasil."<br/>";
        $kanan++;
	}
	$kiri++;
}
?>