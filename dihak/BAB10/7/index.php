<h1>Buat Bintang - Soal BAB10 No 7</h1>
<?php
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
$bintang = $_POST['bintang'];
$baris = $bintang;
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