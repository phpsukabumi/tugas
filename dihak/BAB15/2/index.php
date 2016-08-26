<?php
/*
menghitung jumlah bilangan ganjil antara 10 dan 123456.
*/
$hasil = 0;
function ganjil($a)
{
	if ($a % 2 == 0) {
		return true;
	} else {
		return false;
	}
}
for ($i=10; $i <= 12345; $i++) { 
	if (ganjil($i)) {
		$hasil++;
	}
}
echo $hasil;
?>