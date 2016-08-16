<h1>Hitung Saldo - Soal BAB10 No 3</h1>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$saldo = $_POST['saldo'];
$bulan = $_POST['bulan'];
$administrasi = 9000;

$bulanke = 1;
while ($bulanke <= $bulan) {
	if ($saldo < 1100000) {
        $bunga = 0.03; // 0,03 adalah 3%
    } else {
        $bunga = 0.04;
    } 
    $saldo = ($saldo + ($saldo * $bunga)) - $administrasi;
    echo "Saldo bulan ke-".$bulanke." adalah ".$saldo."<br/>";
	$bulanke++;
}
} else {
	echo '<form method="post" action=""><input type="text" name="saldo" placeholder="Masukan saldo awal"></input><input type="text" name="bulan" placeholder="Masukan total bulan"></input><input type="submit" name="submit"></input></form>';
}
?>