<h1>Hitung Jumlah Penyelesaian - Soal BAB10 No 6</h1>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$hasil = $_POST['angka'];

$jumlahpenyelesain = 0;
$x = $hasil- 2;
while ($x > 0) {
	$y = 1;
	while ($y < $hasil - $x) {
		$z = ($hasil - $y - $x);
		$jumlahpenyelesain++;
		echo $y." + ".$z." + ".$x." = ".$hasil."<br/>";
		$y++;
	}
	$x--;
}
echo "Jumlah Penyelesaian = ".$jumlahpenyelesain;
} else {
	echo '<form method="post" action=""><input type="text" name="angka" placeholder="Masukan angka"></input><input type="submit" name="submit"></input></form>';
}
?>