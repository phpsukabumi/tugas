<?php
include "header.php";
?>
<h1>Menghitung Saldo</h1>
<p>Hasil :</p>
<?php
$saldo = $_POST['saldo'];
$bulan = $_POST['bulan'];
$administrasi = 9000;
for ($i=1; $i <= $bulan; $i++) {
    if ($saldo < 1100000) {
        $bunga = 0.03; // 0,03 adalah 3%
    } else {
        $bunga = 0.04;
    } 
    $saldo = ($saldo + ($saldo * $bunga)) - $administrasi;
    echo "Saldo bulan ke-".$i." adalah ".$saldo."<br/>";
}
include "footer.php";
?>