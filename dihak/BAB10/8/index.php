<h1>Buat Bintang - Soal BAB10 No 8</h1>
<?php
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
$bintang = $_POST['bintang'];
// Kode bagian atas
$baris = 1;
while ($baris < $bintang) {
	$panjang = 1;
	while ($panjang <= $baris) {
		echo "*";
		$panjang++;
	}
	echo "<br/>";
	$baris++;
}
// Kode bagian tengah
$baris = $bintang;
while ($baris > 0) {
	echo "*";
	$baris--;
}
echo "<br/>";
// Kode bagian bawah
$baris = $bintang - 1;
while ($baris > 0) {
	$panjang = 1;
	while ($panjang <= $baris) {
		echo "*";
		$panjang++;
	}
	echo "<br/>";
	$baris--;
}
} else {
	echo '<form method="post" action=""><input type="text" name="bintang" placeholder="Masukan bintang"></input><input type="submit" name="submit"></input></form>';
}
?>