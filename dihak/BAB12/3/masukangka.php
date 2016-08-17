<h1>Mencari nilai terbesar dan terkecil - Soal BAB12 No 3</h1>
<form action="tempur.php" method="post">
<table>
<?php
$jumlah = $_POST['jumlah'];
for ($i=0; $i < $jumlah; $i++) { 
	echo '<tr><td>Masukan angka ke-'.($i + 1).'</td>';
	echo '<td><input type="text" name="data'.$i.'" placeholder="Masukan angka"></input></td></tr>';
}
echo '<input type="hidden" name="jumlah" value="'.$jumlah.'"></input>';
?>
</table>
<input type="submit" name="submit"></input>
</form>