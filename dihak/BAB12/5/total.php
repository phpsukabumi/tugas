<h1>Aplikasi Sederhana - Soal BAB12 No 5</h1>
<table>
<tr><td>Kode Barang</td><td>Nama Barang</td><td>Jumlah Barang</td><td>Harga</td></tr>
<?php
$jumlah = $_POST['jenis'];
$totalharga = 0;
$namabrg = array("1001" => "Sabun Lifebuoy", "1002" => "Permen Blaster", "1003" => "Pasta Gigi Pepsodent", "1004" => "Madu Arbain", "1005" => "Kecap ABC", "1006" => "Saus Tomat ABC", "1007" => "Gula Gulaku", "1008" => "Rinso", "1009" => "Super Pel", "1010" => "Permen Tango");
$hargabrg = array("1001" => 1500, "1002" => 5600, "1003" => 4560, "1004" => 30000, "1005" => 7250, "1006" => 6700, "1007" => 8900, "1008" => 7100, "1009" => 6450, "1010" => 5600);
for ($i=0; $i < $jumlah; $i++) { 
	$kode = $_POST['kode'.$i];
	$banyak = $_POST['banyak'.$i];
	$totalharga += $hargabrg[$kode] * $banyak; 
	echo '<tr><td>'.$kode.'</td>';
	echo '<td>'.($namabrg[$kode]).'</td>';
	echo '<td>'.($banyak).'</td>';
	echo '<td>'.($hargabrg[$kode]).'</td></tr>';
}
?>
</table>
<?php
echo "<br/>Total harga : ".$totalharga;
?>