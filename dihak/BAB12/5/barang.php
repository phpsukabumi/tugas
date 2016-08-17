<h1>Aplikasi Sederhana - Soal BAB12 No 5</h1>
<form action="total.php" method="post">
<table>
<?php
$jumlah = $_POST['jenis'];
for ($i=0; $i < $jumlah; $i++) { 
	echo '<tr><td>Barang ke-'.($i + 1).'</td>';
	echo '<td><input type="text" name="kode'.$i.'" placeholder="Kode barang"></input></td>';
	echo '<td><input type="text" name="banyak'.$i.'" placeholder="Banyak barang"></input></td></tr>';
}
echo "<input type='hidden' name='jenis' value='$jumlah'></input>";
?>
</table>
<input type="submit"></input>
</form>